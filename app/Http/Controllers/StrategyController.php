<?php
namespace App\Http\Controllers;

use App\Models\Strategy;
use App\Models\GymLeader;


use App\Models\Tag;
use Illuminate\Http\Request;

class StrategyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $types = Tag::select('id','name')->get();

        $query = Strategy::with('user', 'gymLeader'); // Start de query met relaties

        // Als er een type is geselecteerd, pas de filter toe op basis van tag_id
        if ($request->has('type')) {
            $typeId = $request->input('type'); // Verwacht nu de tag ID in plaats van de naam
            $query->whereHas('gymLeader', function ($query) use ($typeId) {
                $query->where('tag_id', $typeId); // Filter op de tag_id van de gym leader
            });
        }

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('title', 'like', '%'. $search. '%');
        }

        // Voer de query uit om de strategies op te halen (inclusief filters als die er zijn)
        $strategies = $query->get();

        // Stuur de gefilterde strategies en types naar de view
        return view('strategy.index', compact('strategies', 'types'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create() // hhtps://localhost:8000/Strategies/create
    {
        $gymleaders = GymLeader::all();
        return view('strategy.create', compact('gymleaders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'game_version' => 'required|string',
            'gym_leader_id' => 'required|exists:gym_leaders,id',
        ]);


        $strategy = new Strategy();
        $strategy->title = $validated['title'];
        $strategy->description = $validated['description'];
        $strategy->game_version = $validated['game_version'];
        $strategy->gym_leader_id = $validated['gym_leader_id'];
        $strategy->user_id = auth()->id(); // Auth-gebruiker ID opslaan
        $strategy->save();

        return redirect()->route('strategy.index')->with('status', 'Strategy created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Strategy $strategy)
    {
        $strategy->load('user', 'GymLeader');
        return view('strategy.show', compact('strategy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Strategy $strategy)
    {
        if (auth()->id() !== $strategy->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $gymleaders = GymLeader::all();
        return view('strategy.edit', compact('strategy', 'gymleaders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Strategy $strategy)
    {
        if (auth()->id() !== $strategy->user_id) {
            abort(403, 'Unauthorized action.');
        }


        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'game_version' => 'required|string',
            'gym_leader_id' => 'required|exists:gym_leaders,id',
        ]);

        // Strategy bijwerken
        $strategy->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'game_version' => $validated['game_version'],
            'gym_leader_id' => $validated['gym_leader_id'],
        ]);

        return redirect()->route('strategy.index')->with('status', 'Strategy updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Strategy $strategy)
    {
        if (auth()->id() !== $strategy->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $strategy->delete();

        return redirect()->route('strategy.index')->with('status', 'Strategy deleted successfully');
    }
}

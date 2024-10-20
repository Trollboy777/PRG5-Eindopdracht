<?php
namespace App\Http\Controllers;

use App\Models\Strategy;
use App\Models\GymLeader;


use Illuminate\Http\Request;

class StrategyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // hhtps://localhost:8000/Strategies/ get
    {
        $strategies = Strategy::with('user', 'gymLeader')->get();
        return view('strategy.index', compact('strategies'));
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
        $strategy->load('user', 'gymLeader');
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

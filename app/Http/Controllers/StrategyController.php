<?php

namespace App\Http\Controllers;

use App\Models\Strategy;
use Illuminate\Http\Request;

class StrategyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // hhtps://localhost:8000/Strategies/ get
    {
       $strategies = Strategy::all();
        return view('strategy.index', compact('strategies'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // hhtps://localhost:8000/Strategies/create
    {
        return view('strategy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $strategy = new Strategy();
        $strategy->title = $request->input('title');
        $strategy->description = $request->input('description');
        $strategy->game_version = $request->input('game_version');
        $strategy->gym_leader = $request->input('gym_leader');
        $strategy->user_id = auth()->id();
        $strategy->save();


        return redirect('strategy');
    }

    /**
     * Display the specified resource.
     */
    public function show(Strategy $strategy)
    {
        return view('strategy.show', compact('strategy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Strategy $strategy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Strategy $strategy)
    {
        //
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

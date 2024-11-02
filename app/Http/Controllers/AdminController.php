<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Strategy;

class AdminController extends Controller
{
    public function togglePublishedStatus ($id) {
        $strategy = Strategy::findOrFail($id);


        $strategy->published = !$strategy->published;
        $strategy->save();

        return redirect()->route('admin.strategies')->with('success', 'Strategy status changed!');


    }
    public function index()
    {
        if (!auth()->check() || auth()->user()->role !== 'admin') {
            abort(404);
        }

        $strategies = Strategy::all();
        $users = User::all();
        return view('admin.strategies', compact('strategies', 'users'));
    }
    public function toggleRole($userID) {
        $user = User::findOrFail($userID);

        $user->role = $user->role === 'admin' ? 'user' : 'admin';
        $user->save();

        return redirect()->route('admin.strategies')->with('success', 'User role changed!');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use function Laravel\Prompts\error;

class UserController extends Controller
{
    public function showDashboard()
    {


        $user = auth()->user();
        $strategies = $user->strategies;

        return view('dashboard', compact('user', 'strategies'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
        ]);

        $user = auth()->user();
        $user->update($request->only('name', 'email'));

        return redirect()->route('dashboard')->with('status', 'Profiel bijgewerkt!');
    }
}

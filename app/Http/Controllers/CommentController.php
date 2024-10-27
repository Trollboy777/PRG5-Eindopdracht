<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Strategy;

class CommentController extends Controller
{
    public function store(Request $request, Strategy $strategy)
    {

        $validated = $request->validate([
            'comment' => 'required|string|max:1000',
        ]);


        $comment = new Comment();
        $comment->comment = $validated['comment'];
        $comment->user_id = auth()->id();
        $comment->strategy_id = $strategy->id;
        $comment->save();

        return redirect()->route('strategy.show', $strategy->id)->with('status', 'Comment added successfully');
    }
}

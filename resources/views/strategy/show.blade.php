@extends('layouts.app')

@section('content')

    <title>{{ $strategy->title }}</title>

<h1>{{ $strategy->title }}</h1>
<p>{{ $strategy->description }}</p>
<p>Game Version: {{ $strategy->game_version }}</p>
<p>Gym Leader: {{ $strategy->GymLeader->name}}</p>
<p>Creator: {{$strategy->user->name}}</p>

@if (auth()->id() === $strategy->user_id)
    <a href="{{ route('strategy.edit', $strategy->id) }}">Edit Strategy</a>
    <form action="{{ route('strategy.destroy', $strategy) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Strategy</button>
    </form>
@endif

@auth
    <form action="{{ route('comments.store', $strategy->id) }}" method="POST">
        @csrf
        <div>
            <label for="comment">Add a comment:</label>
            <textarea name="comment" id="comment" rows="5" required></textarea>
        </div>
        <button type="submit">Post Comment</button>
    </form>
@else
    <p><a href="{{ route('login') }}">Log in</a> to post a comment.</p>
@endauth


<h3>Comments:</h3>
@forelse ($strategy->comments as $comment)
    <div>
        <p><strong>{{ $comment->user->name }}</strong> said:</p>
        <p>{{ $comment->comment }}</p>
        <small>Posted on {{ $comment->created_at->format('d M Y') }}</small>
    </div>
@empty
    <p>No comments yet.</p>
@endforelse

@endsection

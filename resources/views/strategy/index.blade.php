@extends('layouts.app')

@section('content')
<h1>All Strategies</h1>

<form action="{{route('strategy.index')}}" method="get">
    <label for="search">Search For A Strategy</label>
    <input type="text" name="search" id="search" placeholder="Search Strategy" value="{{request('search')}}">
    <button type="submit">Search</button>


</form>
<div>
    <h3>Filter by Type:</h3>
    <a href="{{ route('strategy.index') }}">All</a> <!-- Knop om filter te verwijderen -->
    @foreach ($types as $type)
        <a href="{{ route('strategy.index', ['type' => $type->id]) }}">{{ $type->name }}</a> <!-- Verzend de tag_id in plaats van de naam -->
    @endforeach
</div>


@if (auth()->check())
    <a href="{{ route('strategy.create') }}">Create Strat</a>
@else <h2>Login in to create posts</h2>
@endif

<ul>
    @foreach ($strategies as $strategy)
        <li><a href="{{ route('strategy.show', $strategy->id) }}">{{ $strategy->title }}</a>
        <p>{{$strategy->user->name}}</p>
        </li>
    @endforeach
</ul>
@endsection

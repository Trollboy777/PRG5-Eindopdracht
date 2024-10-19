<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strategy List</title>
</head>
<body>
<h1>All Strategies</h1>
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
</body>
</html>

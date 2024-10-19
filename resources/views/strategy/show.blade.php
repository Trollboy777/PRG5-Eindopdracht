<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $strategy->title }}</title>
</head>
<body>
<h1>{{ $strategy->title }}</h1>
<p>{{ $strategy->description }}</p>
<p>Game Version: {{ $strategy->game_version }}</p>
<p>Gym Leader: {{ $strategy->gym_leader }}</p>
<p>Creator: {{$strategy->user->name}}</p>

@if (auth()->id() === $strategy->user_id)
    <a href="{{ route('strategy.edit', $strategy->id) }}">Edit Strategy</a>
    <form action="{{ route('strategy.destroy', $strategy) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Strategy</button>
    </form>
@endif
</body>
</html>

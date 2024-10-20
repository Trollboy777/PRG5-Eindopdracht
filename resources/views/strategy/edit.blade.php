<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Strategy: {{ $strategy->title }}</title>
</head>
<body>
<h1>Edit Strategy: {{ $strategy->title }}</h1>

<form action="{{ route('strategy.update', $strategy->id) }}" method="POST">
    @csrf
    @method('PATCH')

    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ $strategy->title }}" required>
    </div>

    <div>
        <label for="description">Description</label>
        <input type="text" id="description" name="description" value="{{ $strategy->description }}" required>
    </div>

    <div>
        <label for="game_version">Game Version</label>
        <select id="game_version" name="game_version" required>
            <option value="Red Blue & Yellow" {{ $strategy->game_version == 'Red Blue & Yellow' ? 'selected' : '' }}>Red Blue & Yellow</option>
            <option value="Gold Silver & Crystal" {{ $strategy->game_version == 'Gold Silver & Crystal' ? 'selected' : '' }}>Gold Silver & Crystal</option>
            <option value="Ruby Sapphire & Emerald" {{ $strategy->game_version == 'Ruby Sapphire & Emerald' ? 'selected' : '' }}>Ruby Sapphire & Emerald</option>
            <option value="Diamond Pearl & Platinum" {{ $strategy->game_version == 'Diamond Pearl & Platinum' ? 'selected' : '' }}>Diamond Pearl & Platinum</option>
            <option value="Black & White" {{ $strategy->game_version == 'Black & White' ? 'selected' : '' }}>Black & White</option>
            <option value="Black & White 2" {{ $strategy->game_version == 'Black & White 2' ? 'selected' : '' }}>Black & White 2</option>
            <option value="X & Y" {{ $strategy->game_version == 'X & Y' ? 'selected' : '' }}>X & Y</option>
            <option value="Sun & Moon" {{ $strategy->game_version == 'Sun & Moon' ? 'selected' : '' }}>Sun & Moon</option>
            <option value="Ultra Sun & Moon" {{ $strategy->game_version == 'Ultra Sun & Moon' ? 'selected' : '' }}>Ultra Sun & Moon</option>
            <option value="Sword & Shield" {{ $strategy->game_version == 'Sword & Shield' ? 'selected' : '' }}>Sword & Shield</option>
            <option value="Scarlet & Violet" {{ $strategy->game_version == 'Scarlet & Violet' ? 'selected' : '' }}>Scarlet & Violet</option>
        </select>
    </div>

    <div>
        <label for="gym_leader">Gym Leader</label>
        <select id="gym_leader" name="gym_leader_id" required>
            @foreach($gymleaders as $gymleader)
                <option value="{{ $gymleader->id }}" {{ $strategy->gym_leader_id == $gymleader->id ? 'selected' : '' }}>
                    {{ $gymleader->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">Update Strategy</button>
</form>
</body>
</html>

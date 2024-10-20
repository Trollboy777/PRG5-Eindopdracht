<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Strategy</title>
</head>
<body>
<form action="{{ route('strategy.store') }}" method="post">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" required>
    </div>

    <div>
        <label for="description">Description</label>
        <input type="text" id="description" name="description" required>
    </div>

    <div>
        <label for="game_version">Game Version</label>
        <select id="game_version" name="game_version" required>
            <option value="Red Blue & Yellow">Red Blue & Yellow</option>
            <option value="Gold Silver & Crystal">Gold Silver & Crystal</option>
            <option value="Ruby Sapphire & Emerald">Ruby Sapphire & Emerald</option>
            <option value="Diamond Pearl & Platinum">Diamond Pearl & Platinum</option>
            <option value="Black & White">Black & White</option>
            <option value="Black & White 2">Black & White 2</option>
            <option value="X & Y">X & Y</option>
            <option value="Sun & Moon">Sun & Moon</option>
            <option value="Ultra Sun & Moon">Ultra Sun & Moon</option>
            <option value="Sword & Shield">Sword & Shield</option>
            <option value="Scarlet & Violet">Scarlet & Violet</option>
        </select>
    </div>

    <div>
        <label for="gym_leader">Gym Leader</label>
        <select id="gym_leader" name="gym_leader_id" required>
            @foreach($gymleaders as $gymleader)
                <option value="{{ $gymleader->id }}">{{ $gymleader->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit">Create</button>
</form>
</body>
</html>

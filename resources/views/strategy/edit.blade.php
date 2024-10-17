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
        <select id="gym_leader" name="gym_leader" required>
            <!-- Kanto (Red, Blue, Yellow, Let's Go) -->
            <optgroup label="Kanto (Red, Blue, Yellow)">
                <option value="Brock" {{ $strategy->gym_leader == 'Brock' ? 'selected' : '' }}>Brock</option>
                <option value="Misty" {{ $strategy->gym_leader == 'Misty' ? 'selected' : '' }}>Misty</option>
                <option value="Lt. Surge" {{ $strategy->gym_leader == 'Lt. Surge' ? 'selected' : '' }}>Lt. Surge</option>
                <option value="Erika" {{ $strategy->gym_leader == 'Erika' ? 'selected' : '' }}>Erika</option>
                <option value="Koga" {{ $strategy->gym_leader == 'Koga' ? 'selected' : '' }}>Koga</option>
                <option value="Sabrina" {{ $strategy->gym_leader == 'Sabrina' ? 'selected' : '' }}>Sabrina</option>
                <option value="Blaine" {{ $strategy->gym_leader == 'Blaine' ? 'selected' : '' }}>Blaine</option>
                <option value="Giovanni" {{ $strategy->gym_leader == 'Giovanni' ? 'selected' : '' }}>Giovanni</option>
            </optgroup>

            <!-- Johto (Gold, Silver, Crystal) -->
            <optgroup label="Johto (Gold, Silver, Crystal)">
                <option value="Falkner" {{ $strategy->gym_leader == 'Falkner' ? 'selected' : '' }}>Falkner</option>
                <option value="Bugsy" {{ $strategy->gym_leader == 'Bugsy' ? 'selected' : '' }}>Bugsy</option>
                <option value="Whitney" {{ $strategy->gym_leader == 'Whitney' ? 'selected' : '' }}>Whitney</option>
                <option value="Morty" {{ $strategy->gym_leader == 'Morty' ? 'selected' : '' }}>Morty</option>
                <option value="Chuck" {{ $strategy->gym_leader == 'Chuck' ? 'selected' : '' }}>Chuck</option>
                <option value="Jasmine" {{ $strategy->gym_leader == 'Jasmine' ? 'selected' : '' }}>Jasmine</option>
                <option value="Pryce" {{ $strategy->gym_leader == 'Pryce' ? 'selected' : '' }}>Pryce</option>
                <option value="Clair" {{ $strategy->gym_leader == 'Clair' ? 'selected' : '' }}>Clair</option>
            </optgroup>

            <!-- Hoenn (Ruby, Sapphire, Emerald) -->
            <optgroup label="Hoenn (Ruby, Sapphire, Emerald)">
                <option value="Roxanne" {{ $strategy->gym_leader == 'Roxanne' ? 'selected' : '' }}>Roxanne</option>
                <option value="Brawly" {{ $strategy->gym_leader == 'Brawly' ? 'selected' : '' }}>Brawly</option>
                <option value="Wattson" {{ $strategy->gym_leader == 'Wattson' ? 'selected' : '' }}>Wattson</option>
                <option value="Flannery" {{ $strategy->gym_leader == 'Flannery' ? 'selected' : '' }}>Flannery</option>
                <option value="Norman" {{ $strategy->gym_leader == 'Norman' ? 'selected' : '' }}>Norman</option>
                <option value="Winona" {{ $strategy->gym_leader == 'Winona' ? 'selected' : '' }}>Winona</option>
                <option value="Tate & Liza" {{ $strategy->gym_leader == 'Tate & Liza' ? 'selected' : '' }}>Tate & Liza</option>
                <option value="Juan" {{ $strategy->gym_leader == 'Juan' ? 'selected' : '' }}>Juan</option>
                <option value="Wallace" {{ $strategy->gym_leader == 'Wallace' ? 'selected' : '' }}>Wallace</option>
            </optgroup>

            <!-- Sinnoh (Diamond, Pearl, Platinum) -->
            <optgroup label="Sinnoh (Diamond, Pearl, Platinum)">
                <option value="Roark" {{ $strategy->gym_leader == 'Roark' ? 'selected' : '' }}>Roark</option>
                <option value="Gardenia" {{ $strategy->gym_leader == 'Gardenia' ? 'selected' : '' }}>Gardenia</option>
                <option value="Maylene" {{ $strategy->gym_leader == 'Maylene' ? 'selected' : '' }}>Maylene</option>
                <option value="Crasher Wake" {{ $strategy->gym_leader == 'Crasher Wake' ? 'selected' : '' }}>Crasher Wake</option>
                <option value="Fantina" {{ $strategy->gym_leader == 'Fantina' ? 'selected' : '' }}>Fantina</option>
                <option value="Byron" {{ $strategy->gym_leader == 'Byron' ? 'selected' : '' }}>Byron</option>
                <option value="Candice" {{ $strategy->gym_leader == 'Candice' ? 'selected' : '' }}>Candice</option>
                <option value="Volkner" {{ $strategy->gym_leader == 'Volkner' ? 'selected' : '' }}>Volkner</option>
            </optgroup>

            <!-- Unova (Black & White, Black & White 2) -->

            <optgroup label="Unova (Black & White, Black & White 2">
                <option value="Chili" {{ $strategy->gym_leader == 'Chili' ? 'selected' : '' }}>Chili</option>
                <option value="Cress" {{ $strategy->gym_leader == 'Cress' ? 'selected' : '' }}>Cress</option>
                <option value="Elesa" {{ $strategy->gym_leader == 'Elesa' ? 'selected' : '' }}>Elesa</option>
                <option value="Clay" {{ $strategy->gym_leader == 'Clay' ? 'selected' : '' }}>Clay</option>
                <option value="Skyla" {{ $strategy->gym_leader == 'Skyla' ? 'selected' : '' }}>Skyla</option>
                <option value="Bryce" {{ $strategy->gym_leader == 'Bryce' ? 'selected' : '' }}>Bryce</option>
                <option value="Drayton" {{ $strategy->gym_leader == 'Drayton' ? 'selected' : '' }}>Drayton</option>
            </optgroup>

            <optgroup label="Kalos (X & Y)">
                <option value="Viola" {{ $strategy->gym_leader == 'Viola' ? 'selected' : '' }}>Viola</option>
                <option value="Grant" {{ $strategy->gym_leader == 'Grant' ? 'selected' : '' }}>Grant</option>
                <option value="Korrina" {{ $strategy->gym_leader == 'Korrina' ? 'selected' : '' }}>Korrina</option>
                <option value="Ramos" {{ $strategy->gym_leader == 'Ramos' ? 'selected' : '' }}>Ramos</option>
                <option value="Clemont" {{ $strategy->gym_leader == 'Clemont' ? 'selected' : '' }}>Clemont</option>
                <option value="Valerie" {{ $strategy->gym_leader == 'Valerie' ? 'selected' : '' }}>Valerie</option>
                <option value="Olympia" {{ $strategy->gym_leader == 'Olympia' ? 'selected' : '' }}>Olympia</option>
                <option value="Wulfric" {{ $strategy->gym_leader == 'Wulfric' ? 'selected' : '' }}>Wulfric</option>
            </optgroup>

            <optgroup label="Alola (SM & USUM)">
                <option value="Ilima" {{ $strategy->gym_leader == 'Ilima' ? 'selected' : '' }}>Ilima</option>
                <option value="Lana" {{ $strategy->gym_leader == 'Lana' ? 'selected' : '' }}>Lana</option>
                <option value="Kiawe" {{ $strategy->gym_leader == 'Kiawe' ? 'selected' : '' }}>Kiawe</option>
                <option value="Mallow" {{ $strategy->gym_leader == 'Mallow' ? 'selected' : '' }}>Mallow</option>
                <option value="Nanu" {{ $strategy->gym_leader == 'Nanu' ? 'selected' : '' }}>Nanu</option>
                <option value="Hala" {{ $strategy->gym_leader == 'Hala' ? 'selected' : '' }}>Hala</option>
                <option value="Kahili" {{ $strategy->gym_leader == 'Kahili' ? 'selected' : '' }}>Kahili</option>
            </optgroup>

            <optgroup label="Galar (Sword & Shield)">
                <option value="Milo" {{ $strategy->gym_leader == 'Milo' ? 'selected' : '' }}>Milo</option>
                <option value="Nessa" {{ $strategy->gym_leader == 'Nessa' ? 'selected' : '' }}>Nessa</option>
                <option value="Kabu" {{ $strategy->gym_leader == 'Kabu' ? 'selected' : '' }}>Kabu</option>
                <option value="Bea" {{ $strategy->gym_leader == 'Bea' ? 'selected' : '' }}>Bea</option>
                <option value="Allister" {{ $strategy->gym_leader == 'Allister' ? 'selected' : '' }}>Allister</option>
                <option value="Opal" {{ $strategy->gym_leader == 'Opal' ? 'selected' : '' }}>Opal</option>
                <option value="Gordie" {{ $strategy->gym_leader == 'Gordie' ? 'selected' : '' }}>Gordie</option>
                <option value="Raihan" {{ $strategy->gym_leader == 'Raihan' ? 'selected' : '' }}>Raihan</option>
            </optgroup>

            <optgroup label="Paldea (Scarlet & Violet)">
                <option value="Katy" {{ $strategy->gym_leader == 'Katy' ? 'selected' : '' }}>Katy</option>
                <option value="Brassius" {{ $strategy->gym_leader == 'Brassius' ? 'selected' : '' }}>Brassius</option>
                <option value="Iono" {{ $strategy->gym_leader == 'Iono' ? 'selected' : '' }}>Iono</option>
                <option value="Kofu" {{ $strategy->gym_leader == 'Kofu' ? 'selected' : '' }}>Kofu</option>
                <option value="Larry" {{ $strategy->gym_leader == 'Larry' ? 'selected' : '' }}>Larry</option>
                <option value="Rhyme" {{ $strategy->gym_leader == 'Rhyme' ? 'selected' : '' }}>Rhyme</option>
                <option value="Tullip" {{ $strategy->gym_leader == 'Tullip' ? 'selected' : '' }}>Tullip</option>
                <option value="Grusha" {{ $strategy->gym_leader == 'Grusha' ? 'selected' : '' }}>Grusha</option>
            </optgroup>


        </select>
    </div>

    <button type="submit">Update Strategy</button>
</form>
</body>
</html>

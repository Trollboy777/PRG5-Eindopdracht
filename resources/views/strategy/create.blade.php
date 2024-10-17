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
        <select id="gym_leader" name="gym_leader" required>
            <option value="Brock">Brock</option>
            <option value="Misty">Misty</option>
            <option value="Lt. Surge">Lt. Surge</option>
            <option value="Erika">Erika</option>
            <option value="Koga">Koga</option>
            <option value="Sabrina">Sabrina</option>
            <option value="Blaine">Blaine</option>
            <option value="Giovanni">Giovanni</option>
            <option value="Falkner">Falkner</option>
            <option value="Bugsy">Bugsy</option>
            <option value="Whitney">Whitney</option>
            <option value="Morty">Morty</option>
            <option value="Chuck">Chuck</option>
            <option value="Jasmine">Jasmine</option>
            <option value="Pryce">Pryce</option>
            <option value="Clair">Clair</option>
            <option value="Roxanne">Roxanne</option>
            <option value="Brawly">Brawly</option>
            <option value="Wattson">Wattson</option>
            <option value="Flannery">Flannery</option>
            <option value="Norman">Norman</option>
            <option value="Winona">Winona</option>
            <option value="Tate & Liza">Tate & Liza</option>
            <option value="Wallace">Wallace</option>
            <option value="Roark">Roark</option>
            <option value="Gardenia">Gardenia</option>
            <option value="Maylene">Maylene</option>
            <option value="Crasher Wake">Crasher Wake</option>
            <option value="Fantina">Fantina</option>
            <option value="Byron">Byron</option>
            <option value="Candice">Candice</option>
            <option value="Volkner">Volkner</option>
            <option value="Chili">Chili</option>
            <option value="Cress">Cress</option>
            <option value="Elesa">Elesa</option>
            <option value="Clay">Clay</option>
            <option value="Skyla">Skyla</option>
            <option value="Brycen">Brycen</option>
            <option value="Drayton">Drayton</option>
            <option value="Iris">Iris</option>
            <option value="Viola">Viola</option>
            <option value="Grant">Grant</option>
            <option value="Korrina">Korrina</option>
            <option value="Ramos">Ramos</option>
            <option value="Clemont">Clemont</option>
            <option value="Valerie">Valerie</option>
            <option value="Olympia">Olympia</option>
            <option value="Wulfric">Wulfric</option>
            <option value="Ilima">Ilima</option>
            <option value="Lana">Lana</option>
            <option value="Kiawe">Kiawe</option>
            <option value="Mallow">Mallow</option>
            <option value="Nanu">Nanu</option>
            <option value="Hala">Hala</option>
            <option value="Kahili">Kahili</option>
            <option value="Milo">Milo</option>
            <option value="Nessa">Nessa</option>
            <option value="Kabu">Kabu</option>
            <option value="Bea">Bea</option>
            <option value="Allister">Allister</option>
            <option value="Opal">Opal</option>
            <option value="Gordie">Gordie</option>
            <option value="Raihan">Raihan</option>
            <option value="Katy">Katy</option>
            <option value="Brassius">Brassius</option>
            <option value="Iono">Iono</option>
            <option value="Kofu">Kofu</option>
            <option value="Larry">Larry</option>
            <option value="Rhyme">Rhyme</option>
            <option value="Tullip">Tullip</option>
            <option value="Grusha">Grusha</option>


        </select>
    </div>

    <button type="submit">Create</button>
</form>
</body>
</html>

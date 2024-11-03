@extends('layouts.app')

@section('content')

    @if ($errors->has('error'))
        <div class="alert alert-danger">
            {{ $errors->first('error') }}
        </div>
    @endif

    <form action="{{ route('strategy.store') }}" method="post">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" value="{{ old('description') }}">
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="game_version">Game Version</label>
            <select id="game_version" name="game_version">
                <option value="">Select a Game Version</option>
                <option value="Red Blue & Yellow" {{ old('game_version') == 'Red Blue & Yellow' ? 'selected' : '' }}>Red Blue & Yellow</option>
                <option value="Gold Silver & Crystal" {{ old('game_version') == 'Gold Silver & Crystal' ? 'selected' : '' }}>Gold Silver & Crystal</option>
                <option value="Ruby Sapphire & Emerald" {{ old('game_version') == 'Ruby Sapphire & Emerald' ? 'selected' : '' }}>Ruby Sapphire & Emerald</option>
                <option value="Diamond Pearl & Platinum" {{ old('game_version') == 'Diamond Pearl & Platinum' ? 'selected' : '' }}>Diamond Pearl & Platinum</option>
                <option value="Black & White" {{ old('game_version') == 'Black & White' ? 'selected' : '' }}>Black & White</option>
                <option value="Black & White 2" {{ old('game_version') == 'Black & White 2' ? 'selected' : '' }}>Black & White 2</option>
                <option value="X & Y" {{ old('game_version') == 'X & Y' ? 'selected' : '' }}>X & Y</option>
                <option value="Sun & Moon" {{ old('game_version') == 'Sun & Moon' ? 'selected' : '' }}>Sun & Moon</option>
                <option value="Ultra Sun & Ultra Moon" {{ old('game_version') == 'Ultra Sun & Ultra Moon' ? 'selected' : '' }}>Ultra Sun & Ultra Moon</option>
                <option value="Sword & Shield" {{ old('game_version') == 'Sword & Shield' ? 'selected' : '' }}>Sword & Shield</option>
                <option value="Scarlet & Violet" {{ old('game_version') == 'Scarlet & Violet' ? 'selected' : '' }}>Scarlet & Violet</option>
            </select>
            @error('game_version')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="gym_leader">Gym Leader</label>
            <select id="gym_leader" name="gym_leader_id">
                <option value="">Select a Gym Leader</option>
                @foreach($gymleaders as $gymleader)
                    <option value="{{ $gymleader->id }}" {{ old('gym_leader_id') == $gymleader->id ? 'selected' : '' }}>{{ $gymleader->name }}</option>
                @endforeach
            </select>
            @error('gym_leader_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Create</button>
    </form>

@endsection

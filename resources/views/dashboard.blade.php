@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome {{ $user->name }}!</h1>


        <form action="{{ route('dashboard.update') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>

        @if(session('status'))
            <div class="alert alert-success mt-2">{{ session('status') }}</div>
        @endif


        <h2>Your Strategies</h2>
        <ul>
            @foreach($strategies as $strategy)
                <li>{{ $strategy->title }}</li>
            @endforeach
        </ul>
    </div>
@endsection

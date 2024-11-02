{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <h1>Admin - Strategies</h1>--}}

{{--    @if (session('success'))--}}
{{--        <div class="alert alert-success">--}}
{{--            {{ session('success') }}--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <table>--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>Title</th>--}}
{{--            <th>Published</th>--}}
{{--            <th>Action</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach ($strategies as $strategy)--}}
{{--            <tr>--}}
{{--                <td>{{ $strategy->title }}</td>--}}
{{--                <td>{{ $strategy->user->role }}</td>--}}

{{--                <td>{{ $strategy->published ? 'Published' : 'Unpublished' }}</td>--}}
{{--                <td>--}}
{{--                    <form action="{{ route('admin.strategies.toggle', $strategy->id) }}" method="POST">--}}
{{--                        @csrf--}}
{{--                        <button type="submit">--}}
{{--                            {{ $strategy->published ? 'Unpublish' : 'Publish' }}--}}
{{--                        </button>--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--@endsection--}}
@extends('layouts.app')

@section('content')
    <h1>Admin - User Roles</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
        <tr>
            <th>User Name</th>
            <th>Current Role</th>
            <th>Change Role</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <form action="{{ route('admin.users.toggleRole', $user->id) }}" method="POST">
                        @csrf
                        <button type="submit">
                            {{ $user->role === 'admin' ? 'Set to User' : 'Set to Admin' }}
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h1>Admin - Strategies</h1>
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Published</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($strategies as $strategy)
            <tr>
                <td>{{ $strategy->title }}</td>
                <td>{{ $strategy->published ? 'Published' : 'Unpublished' }}</td>
                <td>
                    <form action="{{ route('admin.strategies.toggle', $strategy->id) }}" method="POST">
                        @csrf
                        <button type="submit">
                            {{ $strategy->published ? 'Unpublish' : 'Publish' }}
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


@extends('layouts.app')

@section('content')
    <h1>Create a New User</h1>

    <form method="POST" action="{{ route('users.create') }}">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>

        <!-- Add other form fields as needed -->

        <button type="submit">Create User</button>
    </form>
@endsection

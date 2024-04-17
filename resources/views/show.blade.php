<!-- resources/views/users/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>User Details</h1>

    <p>Name: {{ $user->name }}</p>
    <p>Age: {{ $user->age }}</p>

    <!-- Add other user details as needed -->
@endsection

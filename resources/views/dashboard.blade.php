@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Welcome, {{ Auth::user()->name }}!</h2>
    <p>You are logged in.</p>
    <a href="/profile/create" class="btn btn-success">Create Profile</a>
    <a href="/profiles" class="btn btn-info">View All Profiles</a>
    <a href="/logout" class="btn btn-danger">Logout</a>
</div>
@endsection
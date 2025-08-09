@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>My Profile</h2>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $profile->profile_image) }}" class="img-fluid rounded-start" alt="Profile">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $profile->full_name }}</h5>
                    <p><strong>Email:</strong> {{ $profile->email }}</p>
                    <p><strong>Phone:</strong> {{ $profile->phone }}</p>
                    <p><strong>Address:</strong> {{ $profile->address }}</p>
                    <p><strong>Bio:</strong> {{ $profile->bio }}</p>
                    <p><strong>Hobbies:</strong> {{ $profile->hobbies }}</p>
                    <p><strong>Date of Birth:</strong> {{ $profile->date_of_birth }}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="/profiles" class="btn btn-secondary mt-3">Back to Profiles</a>
</div>
@endsection
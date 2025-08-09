@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>All Profiles</h2>
    <div class="row">
        @foreach($profiles as $profile)
        <div class="col-md-4 mb-4">
            <div class="card">
                @if($profile->profile_image)
                <img src="{{ asset('storage/' . $profile->profile_image) }}" class="card-img-top" alt="Profile" style="height: 200px; object-fit: cover;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $profile->full_name }}</h5>
                    <p class="card-text"><strong>Email:</strong> {{ $profile->email }}</p>
                    <p class="card-text"><strong>Phone:</strong> {{ $profile->phone }}</p>
                    <a href="/profile/show" class="btn btn-primary btn-sm">View Full Profile</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
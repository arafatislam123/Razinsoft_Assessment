@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Create Profile</h2>
    <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Full Name</label>
            <input type="text" name="full_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Address</label>
            <textarea name="address" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Bio</label>
            <textarea name="bio" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label>Profile Image (JPG/PNG, max 2MB)</label>
            <input type="file" name="profile_image" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Hobbies</label>
            <input type="text" name="hobbies" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
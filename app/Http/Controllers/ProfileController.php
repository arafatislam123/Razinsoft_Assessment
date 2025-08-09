<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'bio' => 'required|string',
            'profile_image' => 'required|image|mimes:jpg,png|max:2048',
            'hobbies' => 'required|string',
            'date_of_birth' => 'required|date',
        ]);

        $imagePath = $request->file('profile_image')->store('profiles', 'public');

        Profile::create([
            'user_id' => Auth::id(),
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'bio' => $request->bio,
            'profile_image' => $imagePath,
            'hobbies' => $request->hobbies,
            'date_of_birth' => $request->date_of_birth,
        ]);

        return redirect('/profile/show')->with('success', 'Profile created successfully!');
    }

    public function show()
    {
        $profile = Auth::user()->profile;
        if (!$profile) {
            return redirect('/profile/create')->with('error', 'No profile found. Please create one.');
        }
        return view('profiles.show', compact('profile'));
    }

    public function index()
    {
        $profiles = Profile::with('user')->get(); // Eager load user to prevent N+1
        return view('profiles.index', compact('profiles'));
    }
}
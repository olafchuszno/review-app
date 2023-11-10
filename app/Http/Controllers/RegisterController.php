<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        // Get and Validate the data
        $attributes = request()->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users,email'],
            'username' => ['required', 'min:4', 'max:255', 'alpha_num:ascii', 'unique:users,username'],
            'password' => ['required', 'min:7', 'max:255'],
            'avatar' => 'image'
        ]);

        // Check for the avatar
        if (isset($attributes['avatar'])) {
            
            $attributes['avatar'] = request()->file('avatar')->store('avatars');
        } else {

            $attributes['avatar'] = 'avatars/defaultAvatar.jpg';
        }

        // Create the user
        $user = User::create($attributes);

        // Log the user in
        auth()->login($user);

        // Redirect to the homepage
        return redirect('/')->with('success', 'We created your account');

    }
}

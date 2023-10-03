<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'username' => ['required', 'min:4', 'max:255', 'unique:users,username'],
            'password' => ['required', 'min:7', 'max:255'],
            'avatar' => 'image'
        ]);

        // Check for the avatar
        if (isset($attributes['avatar'])) {

            dd('avatar is set');
        } else {

            dd('avatar is not set');
        }

        // Create the user

        // Log the user in

        // Redirect to the homepage
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function edit()
    {
        return view('profile.edit', [
            'user' => User::find(auth()->user()->id)
        ]);
    }

    public function update()
    {
        $user = User::find(auth()->user()->id);

        // Validate the input
        $attributes = request()->validate([
            'first_name' => ['required', 'max:255', 'alpha_num:ascii'],
            'last_name' => ['required', 'max:255', 'alpha_num:ascii'],
            'avatar' => 'image',
            'username' => ['required', 'min:4', 'max:255', "unique:users,username,{$user->id}", 'alpha_num:ascii' ],
            'password' => ['required']
        ]);

        if (Hash::check($attributes['password'], $user->password)) {

            unset($attributes['password']);
        } else {

            throw ValidationException::withMessages([
                'password' => 'Incorrect password'
            ]);

            die();
        }

        // Store the avatar (if set)
        if (isset($attributes['avatar'])) {

            $attributes['avatar'] = request()->file('avatar')->store('avatars');
        } 

        // Update the profile
        $user->update($attributes);

        return redirect('/profile')->with('success', 'Your profile was updated');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        // Get and Validate the input
        $attributes = request()->validate([
            'email_or_username' => 'required|max:255',
            'password' => 'required|min:7|max:255'
        ]);

        // Store the email_or_username input
        $email_or_username = $attributes['email_or_username'];

        // If user with the input as EMAIL WAS found
        if ( User::where(['email' => $attributes['email_or_username']])->get()->count() ) {

            // Change the input's key to EMAIL
            unset($attributes['email_or_username']);
            $attributes['email'] = $email_or_username;

        } else {
            // User with the input as EMAIL WASN'T found

            // Change the input's key to USERNAME
            unset($attributes['email_or_username']);
            $attributes['username'] = $email_or_username;
        }

        // Try to Authenticate the user (with input as email, or if it wasn't found - as username)
        if (! auth()->attempt($attributes)) {

            throw ValidationException::withMessages([
                'email_or_username' => "The credentials didn't match or the account wasn't found"
            ]);

            die();
        }

        // Authentication succeeded, log the user in


    }
}

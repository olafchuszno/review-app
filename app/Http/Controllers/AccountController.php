<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('account.index');
    }

    public function edit()
    {
        return view('account.edit', [
            'user' => User::find(auth()->user()->id)
        ]);
    }

    public function update()
    {
        // Validate input
        $attributes = request()->validate([
            'current_password' => ['required', 'min:8', 'current_password'],
            'new_password' => ['required', 'max:255', Password::default(), 'confirmed'],
            'new_password_confirmation' => ['required']
        ]);

        $new_password = [
            'password' => $attributes['new_password']
        ];

        // Update User's password
        User::find(auth()->user()->id)->update($new_password);

        return redirect('/account')->with('success', 'Password was updated!');
    }


}

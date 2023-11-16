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
            'user' => Controller::getUser()
        ]);
    }

    public function update()
    {
        $user = Controller::getUser();

        // Validate input
        $attributes = $this->update_password_validation();

        // Update User's password
        $this->update_password($user, $attributes['new_password']);

        // Redirect back with a success message
        return redirect('/account')->with('success', 'Password was updated!');
    }




    // Methods

    protected function update_password_validation()
    {
        return request()->validate([
            'current_password' => ['required', 'current_password'],
            'new_password' => ['required', 'max:255', Password::default(), 'confirmed'],
            'new_password_confirmation' => ['required']
        ]);
    }

    protected function update_password(User $user, string $new_password)
    {
        return $user->update(['password' => $new_password]);
    }

}

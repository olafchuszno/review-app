<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function edit()
    {
        return view('profile.edit', [
            'first_name' => auth()->user()->first_name,
            'last_name' => auth()->user()->last_name,
            'avatar' => auth()->user()->avatar,
            'username' => auth()->user()->username
        ]);
    }
}

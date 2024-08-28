<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    //
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {

        //valdidate
        $validatedAttributes = request()->validate([

            'name' => ['required'],
            'password' => ['required', Password::min(6), 'confirmed'],
            'email' => ['required', 'email']
        ]);

        //create new users
        $user = User::create($validatedAttributes);

        //login
        Auth::login($user);

        //redirect
        return redirect()->to('/jobs');
    }
}

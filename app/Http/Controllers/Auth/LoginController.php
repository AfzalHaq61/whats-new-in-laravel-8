<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create() {
        return view('sessions.create');
    }

    public function store(Request $request) {

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($attributes)) {

            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not verified',
            ]);

        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back!');

    }
}

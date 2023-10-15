<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store(Request $request) {

        $attributes = request()->validate([
            'name' => 'required|max:255|min:3',
            'username' => ['required', 'max:255', 'min:3', Rule::unique('users', 'username')],
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);

        auth()->login(User::create($attributes));

        return redirect()->back()->with('success', 'Your account has been created.');
    }
}

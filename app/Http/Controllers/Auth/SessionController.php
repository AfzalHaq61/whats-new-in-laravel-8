<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroy() {

        auth()->logout();

        return redirect('/')->with('success', 'Good Buy!');

    }
}

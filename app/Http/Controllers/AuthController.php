<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(Request $request): View {
        return view('pages.auth.login');
    }

    public function register(Request $request): View {
        return view('pages.auth.register');
    }
}

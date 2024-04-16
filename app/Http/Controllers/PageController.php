<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(Request $request): View {
        return view('welcome');
    }

    public function dashboard(Request $request) {
        return view('layouts.app');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function users(Request $request)
    {
        return Inertia::render('Users/Users');
    }

    public function addUser(Request $request)
    {
        return Inertia::render('Users/Users');
    }
}

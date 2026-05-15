<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/Login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($credentials, $request->remember)) {
            return back()->withErrors([
                'email' => 'Las credenciales son incorrectas.',
            ]);
        }

        $request->session()->regenerate();

        return Inertia::render('Dashboard');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function viewCreateUser()
    {
        return Inertia::render('Auth/Register');
    }

    public function createUser(UserRequest $request)
    {
        $data = $request->except('password_confirmation');
        $user = new User();
        $user->fill($data);
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return Inertia::render('Auth/Login');
    }

    public function addUser()
    {
        return Inertia::render('User/AddNewUser');
    }
}

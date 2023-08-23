<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login Page'
        ]);
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'message' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register()
    {
        return view('register', [
            'title' => 'Register Page'
        ]);
    }
    public function create(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'name' => ['required'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $credentials['email'])->first();
        if ($user) {
            return back()->withErrors([
                'message' => 'Email has been used',
            ]);
        }

        User::insert([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'email_verified_at' => now(),
            'password' => Hash::make($credentials['password']), // password
            'remember_token' => Str::random(10),
            'address_id' => null
        ]);
        Session::flash('message', 'Welcome! Please input email and password');

        return redirect()->intended('/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->intended('login');
    }
}

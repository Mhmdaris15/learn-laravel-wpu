<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // return redirect()->route('/posts');
            // intended is to passing middleware to redirect to intended page
            return redirect()->intended('/posts');
        }

        // return back()->with('loginError', 'Login failed');
        return back()->with('loginError', 'Login failed');
    }
}

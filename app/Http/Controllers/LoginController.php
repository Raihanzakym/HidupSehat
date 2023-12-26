<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->isAdmin()) {
                return redirect()->route('admin.panel')->with('status', 'Login successful as admin!');
            } else {
                return redirect('/')->with('status', 'Login successful!');
            }
        }

        return redirect()->route('login')->with('error', 'Invalid email or password.');
    
    }
}

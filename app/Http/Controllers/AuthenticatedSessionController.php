<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','string','email'],
            'password' => ['required','string'],
        ]);
        
        if(!Auth::attempt($credentials, $request->boolean('remember')))
        {
            //No corresponden los datos
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }
        //los datos estan ok
        $request->session()->regenerate();
        return redirect()->intended()->with('success','Usuario Logueado');
    }

    public function destroy(Request $request) 
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('login')->with('success', 'Usuario Logout');
    }
}

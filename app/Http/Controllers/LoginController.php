<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (!is_null($request->user())) {
            return redirect()->route('dashboard');
        }

        return view("pages.login");
    }

    public function authenticate(LoginRequest $request)
    {
        if (Auth::attempt($request->only(["email", "password"]), $request->get("rememberMe"))) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'password' => 'Zadali jste špatné heslo',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}

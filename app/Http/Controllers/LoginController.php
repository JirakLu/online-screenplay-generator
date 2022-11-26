<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function showLogin(Request $request): View|RedirectResponse
    {
        if (!is_null($request->user())) {
            return redirect()->route('dashboard');
        }

        return view("pages.auth.login");
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->only(["email", "password"]), $request->get("rememberMe"))) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'password' => 'Zadali jste špatné heslo',
        ])->onlyInput("email");
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

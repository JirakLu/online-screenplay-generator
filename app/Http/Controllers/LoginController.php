<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{

    public function login(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->safe()->only(["email", "password"]), $request->safe()->only("rememberMe") ?? false)) {
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

    public function showLogin(Request $request): View|RedirectResponse
    {
        if (!is_null($request->user())) {
            return redirect()->route('dashboard');
        }

        return view("pages.auth.login");
    }
}

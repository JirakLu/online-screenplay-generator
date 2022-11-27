<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function showRegister(Request $request): View|RedirectResponse
    {
        if (!is_null($request->user())) {
            return redirect()->route('dashboard');
        }

        return view("pages.auth.register");
    }

    public function register(RegisterRequest $request): RedirectResponse
    {
        $user = User::create($request->only(["name", "email", "password"]));

        event(new Registered($user));
        Auth::loginUsingId($user->id);

        return redirect()->route("dashboard");
    }
}

<?php

namespace App\Http\Controllers;

class PasswordController extends Controller
{
    public function forgottenPassword()
    {
        return view("pages.auth.forgotten-password");
    }
}

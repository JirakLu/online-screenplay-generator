<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    public function verifyShow(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
            ? redirect()->intended("dashboard")
            : view('pages.auth.verify-email');
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect()->route("dashboard");
    }

    public function verifyNotification(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back();
    }
}

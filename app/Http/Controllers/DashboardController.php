<?php

namespace App\Http\Controllers;

use App\Models\Script;

class DashboardController extends Controller
{
    public function index()
    {
        $scripts = Script::whereUserId(auth()->user()->id)->get();

        return view("pages.dashboard", compact("scripts"));
    }
}

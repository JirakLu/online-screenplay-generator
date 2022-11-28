<?php

namespace App\Http\Controllers;

use App\Models\Script;

class DashboardController extends Controller
{
    public function index()
    {
        $script = Script::whereId(1)->get();

        return view("pages.dashboard", compact("script"));
    }
}

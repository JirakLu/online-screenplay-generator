<?php

namespace App\Http\Controllers;

use App\Models\Script;

class DashboardController extends Controller
{
    public function index()
    {
        $script = Script::whereId(1)->with(
            [
                "scenes",
                "scenes.characters",
                "scenes.sceneType",
                "scenes.shots",
                "scenes.shots",
                "scenes.shots.comments",
                "scenes.shots.monologs",
                "scenes.shots.monologs.character",
                "scenes.shots.shotParams",
                "scenes.shots.shotType",
                "scenes.shots.sounds"
            ]
        )->get();

        return view("pages.dashboard", compact("script"));
    }
}

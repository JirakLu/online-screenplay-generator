<?php

namespace App\Http\Controllers;

use App\Models\Script;
use Barryvdh\DomPDF\Facade\Pdf;

class GeneratePDFController extends Controller
{

    public function generate()
    {
        $script = Script::with([
            'characters',
            'scenes',
            'scenes.sceneType',
            'scenes.shots',
            'scenes.characters',
            'scenes.shots.shotParams',
            'scenes.shots.shotTypeFrom',
            'scenes.shots.shotTypeTo',
            'scenes.shots.comments',
            'scenes.shots.sounds',
            'scenes.shots.monologs',
        ])->where('user_id', 1)->first();

        $script->scenes = $script->scenes->sortBy('number');
        // sort shots by number
        $script->scenes->each(function ($scene) {
            $scene->shots = $scene->shots->sortBy('number');
        });

        $pdf = Pdf::loadView("components.pdf.default", ['script' => $script])->setPaper("a4", "landscape");

        return $pdf->stream("truncova.pdf");
//        return view("components.pdf.default", ['script' => $script]);
    }
}

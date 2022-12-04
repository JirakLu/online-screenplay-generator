<?php

namespace App\Http\Controllers;

use App\Models\Script;
use Barryvdh\DomPDF\Facade\Pdf;

class GeneratePDFController extends Controller
{

    public function preview(int $id)
    {
        $pdf = $this->generate($id);

        return $pdf->stream();
    }

    public function generate(int $id): \Barryvdh\DomPDF\PDF
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
        ])->find($id);

        $script->scenes = $script->scenes->sortBy('number');
        // sort shots by number
        $script->scenes->each(function ($scene) {
            $scene->shots = $scene->shots->sortBy('number');
        });

        return Pdf::loadView("components.pdf.default", ['script' => $script])->setPaper("a4", "landscape");
    }

    public function download(int $id)
    {
        $pdf = $this->generate($id);

        return $pdf->download();
    }
}

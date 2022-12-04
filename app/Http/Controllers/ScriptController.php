<?php

namespace App\Http\Controllers;

use App\Models\Script;
use App\Services\PDFService;

class ScriptController extends Controller
{
    public function index(int $id)
    {
        $script = $this->getScript($id);

        return view("pages.script", compact("script"));
    }

    public function getScript(int $id): Script
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

        return $script;
    }

    public function delete($id)
    {
        // delete script with id $id
        $script = Script::find($id);
        $script->delete();
        return redirect()->route("dashboard");

    }

    public function create()
    {
        //TODO: create script
    }


    // Return PDF preview

    public function update()
    {
        //TODO: update script
    }

    public function preview(int $id)
    {
        $script = $this->getScript($id);
        $pdf = PDFService::generatePDF($script);

        return $pdf->stream($script->name . ".pdf");
    }

    // Return PDF download

    public function download(int $id)
    {
        $script = $this->getScript($id);
        $pdf = PDFService::generatePDF($script);

        return $pdf->download($script->name . ".pdf");
    }
}

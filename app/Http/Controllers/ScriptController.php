<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScriptInitRequest;
use App\Models\SceneType;
use App\Models\Script;
use App\Models\ShotType;
use App\Services\PDFService;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class ScriptController extends Controller
{
    public function index(int $id)
    {
        $script = $this->getScript($id);

        $sceneTypes = [];

        SceneType::all(['id', 'short'])->each(function ($sceneType) use (&$sceneTypes) {
            $sceneTypes[$sceneType->id] = $sceneType->short;
        });

        $shotTypes = [];

        ShotType::all(['id', 'full'])->each(function ($shotType) use (&$shotTypes) {
            $shotTypes[$shotType->id] = $shotType->full;
        });

        return view("pages.script", compact("script", "sceneTypes", "shotTypes"));
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
            'scenes.shots.sounds',
            'scenes.shots.monologs',
        ])->find($id);
        Gate::authorize('view', $script);

        $script->scenes = $script->scenes->sortBy('number');
        // sort shots by number
        $script->scenes->each(function ($scene) {
            $scene->shots = $scene->shots->sortBy('number');
        });

        return $script;
    }

    public function init(ScriptInitRequest $request)
    {
        $script = new Script($request->validated());
        $script->user_id = auth()->user()->id;
        $script->save();

        return redirect()->route("script.index", ["id" => $script->id]);
    }

    public function delete($id)
    {
        // delete script with id $id
        $script = Script::find($id);
        Gate::authorize('delete', $script);
        $script->delete();
        return redirect()->route("dashboard");

    }


    public function store(Response $response)
    {
        //TODO: store script
    }

    // Return PDF preview

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

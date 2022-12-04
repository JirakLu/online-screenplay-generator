<?php

namespace App\Http\Controllers;

use App\Models\Script;

class ScriptController extends Controller
{
    public function index()
    {
        return view("pages.script");
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

    public function update()
    {
        //TODO: update script
    }

    public function download()
    {
        //TODO: download script
    }
}

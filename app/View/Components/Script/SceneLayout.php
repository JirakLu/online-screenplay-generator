<?php

namespace App\View\Components\Script;

use App\Models\SceneType;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Scene;

class SceneLayout extends Component
{

    public array $characters = [];

    public function __construct(
        public array $sceneTypes,
        public array $shotTypes,
        public ?Scene $scene = null,
    )
    {
        if (!is_null($this->scene)) {
            $this->characters = $this->scene->characters->toArray();
        }
    }

    public function render(): View
    {
        return view('components.script.scene-layout');
    }
}

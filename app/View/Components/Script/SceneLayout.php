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
            $this->scene->characters->each(function ($item, $key) {
                $this->characters[$item['id']] = $item['first_name'] . " " . $item['last_name'];
            });
        }
    }

    public function render(): View
    {
        return view('components.script.scene-layout');
    }
}

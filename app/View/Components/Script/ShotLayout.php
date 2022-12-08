<?php

namespace App\View\Components\Script;

use App\Models\Shot;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShotLayout extends Component
{

    public function __construct(
        public ?Shot $shot,
        public array $shotTypes = [],
        public array $characters = [],
    )
    {

    }

    public function render(): View
    {
        return view('components.script.shot-layout');
    }
}

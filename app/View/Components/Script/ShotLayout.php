<?php

namespace App\View\Components\Script;

use App\Models\Shot;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShotLayout extends Component
{
    public array $characterNames = [];

    public function __construct(
        public ?Shot $shot,
        public array $shotTypes = [],
        public array $characters = [],
    )
    {
        foreach ($this->characters as $character) {
            $this->characterNames[$character['id']] = $character['first_name'] . ' ' . $character['last_name'];
        }

    }

    public function render(): View
    {
        return view('components.script.shot-layout');
    }
}

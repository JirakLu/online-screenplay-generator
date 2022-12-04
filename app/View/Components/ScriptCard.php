<?php

namespace App\View\Components;

use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ScriptCard extends Component
{

    public function __construct(
        public int    $id,
        public string $name,
        public string $description,
        public Carbon $updatedAt,
    )
    {
    }

    public function render(): View
    {
        return view('components.script-card');
    }
}

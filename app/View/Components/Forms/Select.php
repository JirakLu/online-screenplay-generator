<?php

namespace App\View\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{

    public function __construct(
        public string $name,
        public string $label,
        public string $id = "",
        public int $selected = 0,
        public array $options = [],
    ) {
        if (empty($this->id)) {
            $this->id = $name . "-" . rand();
        }
    }

    public function render(): View
    {
        return view('components.forms.select');
    }
}

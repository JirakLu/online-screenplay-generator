<?php

namespace App\View\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{

    public function __construct(
        public string $name,
        public string $id = "",
    ) {
        if (empty($this->id)) {
            $this->id = $name . "-" . rand();
        }
    }

    public function render(): View
    {
        return view('components.forms.checkbox');
    }
}

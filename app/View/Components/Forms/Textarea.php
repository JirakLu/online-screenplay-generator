<?php

namespace App\View\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    public function __construct(
        public string $name,
        public string $label,
        public string $id = "",
        public bool   $hideLabel = false,
        public string $value = "",
        public bool   $remember = false,
    )
    {
        if ($this->remember && !is_null(old($this->name))) {
            $this->value = old($this->name);
        }

        if (empty($this->id)) {
            $this->id = $name . "-" . rand();
        }
    }

    public function render(): View
    {
        return view('components.forms.textarea');
    }
}

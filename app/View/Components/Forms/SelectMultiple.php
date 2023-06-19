<?php

namespace App\View\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectMultiple extends Component
{
    public string $selectString = '';

    public function __construct(
        public string $name,
        public string $label,
        public string $id = "",
        public array $selected = [],
        public array $selectOptions = [],
    ) {
        if (empty($this->id)) {
            $this->id = $name . "-" . rand();
        }

        if (count($this->selectOptions) > 0) {

            $this->selectString = implode(',', $this->selectOptions);
        }
    }

    public function render(): View
    {
        return view('components.forms.select-multiple');
    }
}

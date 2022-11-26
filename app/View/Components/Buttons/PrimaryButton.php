<?php

namespace App\View\Components\Buttons;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PrimaryButton extends Component
{

    public function __construct(
        public string $type
    ) {
    }

    public function render(): View
    {
        return view('components.buttons.primary-button');
    }
}

<?php

namespace App\View\Components\Buttons;

use App\Exceptions\MissingArgumentException;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PrimaryButton extends Component
{

    public function __construct(
        public string $type,
        public ?string $href = null
    ) {
        if (($this->type === "link" || $this->type === "externalLink") && !isset($this->href)) {
            throw new MissingArgumentException(
                "Button with type \"link\" or \"externalLink\" needs argument \"href\" to be specified."
            );
        }
    }

    public function render(): View
    {
        return view('components.buttons.primary-button');
    }
}

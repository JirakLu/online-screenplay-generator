<?php

namespace App\View\Components\Modal;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public function __construct(
        public string $isOpen,
        public string $onClose
    )
    {
    }

    public function render(): View
    {
        return view('components.modal.modal');
    }
}

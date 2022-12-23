<?php

namespace App\Services;

use App\Models\Script;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFService
{
    public static function generatePDF(Script $script): \Barryvdh\DomPDF\PDF
    {
        return Pdf::loadView("components.pdf.default", ['script' => $script])->setPaper("a4", "landscape");
    }
}

<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

class GeneratePDF extends Controller
{
    public function generate()
    {
        $pdf = Pdf::loadView("pages.pdf.pdf")->setPaper("a4", "landscape");
        return $pdf->download("negr.pdf");
    }
}

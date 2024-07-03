<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Stdfksdjfklsdjkjt'
        ];
    
        $content = PDF::loadView('pdf.document', $data);
        $pdf = $content->download();
    
        Storage::disk('public')->put('mi-archivo3.pdf', $pdf->getContent());
    }
}

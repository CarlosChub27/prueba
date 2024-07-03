<?php

namespace App\Livewire;

use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Options;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Mustache_Engine;
use Spatie\Permission\Models\Role;

class Prueba extends Component
{
    public $name = 'hol';

    public function save()
    {

        $html = new Mustache_Engine(array('entity_flags' => ENT_QUOTES));
        $data = ['name' => 'carlos'];
        $result = $html->render('<p>A {{ name }} ollllll</p>', $data);
        // $data = collect(['name'=>'carlos']);
        // $data = json_decode($data);

        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // $listo = $pdf->stream('document.pdf');
        // $path = Storage::put('document.pdf', $listo);
        // dd($path);


        // dd(public_path());
        $listo = Pdf::loadFile(public_path() . '/storage/myfile.html')->save('file.pdf')->stream('download.pdf');
        dd($listo);



        $pdf = Pdf::loadView('pdf.document', $data);
        $listo = $pdf->download('document.pdf');
        // dd($listo);
        // $pdf = App::make('dompdf.wrapper');
        // $pdf = FacadePdf::loadView('pdf.document');
        $path = Storage::put('document.pdf', $listo);
        dd($path);
    }

    public function render()
    {
        return view('livewire.prueba');
    }
}

// $pdf->loadHTML($html)->setPaper('letter', 'portrait');
        // $html = '
        // <html>
        // <head>
        //     <title>Formulario</title>
        // </head>
        // <body>
        //     <div style="margin-left: 10mm; margin-right: 10mm; margin-top: -1mm; margin-bottom: -1mm">
        //         <p>A {{ name }} ollllll</p>
        //     </div>
        // </body>
        // </html>';
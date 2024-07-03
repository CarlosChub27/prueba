<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BackController extends Controller
{
    public function handleGet()
    {
        Log::info('Cuerpo de la solicitud: get funcionando');
        return response()->json(['success' => true], 200);
    }

    public function handlePost(Request $request)
    {

        // Obtener todos los datos de la solicitud (form-data, x-www-form-urlencoded, json)
        $allData = $request->all();
        Log::info('datos de la solicitud: ' . json_encode($allData));

        // Procesar los datos
        if (!empty($allData)) {
            $response = ['success' => true, 'message' => 'Datos form recibidos', 'data' => $allData];
        } else {
            $response = ['success' => false, 'message' => 'No se recibieron datos'];
        }

        return response()->json($response, 200);
    }
}

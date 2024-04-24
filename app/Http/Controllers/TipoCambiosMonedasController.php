<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipoCambiosMonedasController extends Controller
{
    public function index()
    {
        $tiposCambioMonedas = TiposCambioMonedas::all();
        return response()->json($tiposCambioMonedas);
    }

    public function getTiposCambioPorMoneda($idMoneda)
    {
        $tiposCambio = TiposCambioMonedas::where('monedas_id', $idMoneda)->get();
        return response()->json($tiposCambio);
    }
}

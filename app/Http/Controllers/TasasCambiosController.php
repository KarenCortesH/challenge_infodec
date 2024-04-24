<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TasasCambiosController extends Controller
{
    protected $tasaCambioService;

    public function __construct(TasaCambioService $tasaCambioService)
    {
        $this->tasaCambioService = $tasaCambioService;
    }

    public function getTasaCambioPorCiudad($ciudad)
    {
        $tasaCambio = $this->tasaCambioService->getTasaCambioPorCiudad($ciudad);
        return response()->json($tasaCambio);
    }
}

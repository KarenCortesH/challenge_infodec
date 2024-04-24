<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistorialConsultasController extends Controller
{
    public function index()
    {
        $historial = HistorialConsulta::latest()->take(5)->get();
        return response()->json($historial);
    }

    public function store(Request $request)
    {
        $consulta = new HistorialConsulta();
        // Asignar los datos de la consulta desde el $request
        $consulta->save();

        return response()->json($consulta, 201);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CiudadesController extends Controller
{
    //
    public function getCiudadesPorPais($idPais)
    {
        $ciudades = Ciudad::where('pais_id', $idPais)->get();
        return response()->jason($ciudades);
    }
}

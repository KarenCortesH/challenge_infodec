<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    //
    public function index()
    {
        $paises = Pais::all();
        return response()->json($paises);
    }
}

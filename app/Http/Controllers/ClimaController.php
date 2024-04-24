<?php

namespace App\Http\Controllers;

use App\Services\ClimaService;

class ClimaController extends Controller
{
    protected $climaService;

    public function __construct(ClimaService $climaService)
    {
        $this->climaService = $climaService;
    }

    public function getClimaPorCiudad($ciudad)
    {
        $clima = $this->climaService->getClimaPorCiudad($ciudad);
        return response()->json($clima);
    }
}

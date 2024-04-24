<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

    //Rta Pais
    Route::get('paises', [PaisController::class, 'index']);
    //Rta Ciudades
    Route::get('paises/{id}/ciudades', [CiudadesController::class, 'getCiudadesPorPais']);
    //Rta Clima
    Route::get('clima/{ciudad}', [ClimaController::class, 'getClimaPorCiudad']);
    //Rta TasaCambio
    Route::get('tasasCambio/{ciudad}', [TasasCambio::class, 'Tasas_Cambio_idTasas_Cambio']);
    //Rta HistorialConsultas
    Route::get('historialConsultas', [HistorialConsultasController::class, 'index']);
    Route::get('historialConsultas', [HistorialConsultasController::class, 'historial']);

    //Rta TiposCambioMonedas
    Route::get('tipos-cambio-monedas', [TiposCambioMonedasController::class, 'index']);
    Route::get('tipos-cambio-monedas/{idMoneda}', [TiposCambioMonedasController::class, 'getTiposCambioPorMoneda']);

});

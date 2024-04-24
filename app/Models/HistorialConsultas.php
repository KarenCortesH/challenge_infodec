<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistorialConsulta extends Model
{
    protected $fillable = [
        'presupuesto',
        'createAt',
        'Pais_idPais',
        'Ciudades_idCiudades',
        'Ciudades_Pais_idPais',
        'Monedas_idMonedas'
    ];

    // Relación con el modelo Pais
    public function pais()
    {
        return $this->belongsTo(Pais::class, 'Pais_idPais');
    }

    // Relación con el modelo Ciudad
    public function ciudad()
    {
        return $this->belongsTo(Ciudades::class, 'Ciudades_idCiudades');
    }

    // Relación con el modelo Moneda
    public function moneda()
    {
        return $this->belongsTo(Monedas::class, 'Monedas_idMonedas');
    }
}

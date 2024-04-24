<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    protected $fillable = ['nombreCiudad', 'Pais_idPais'];

    // Relación con el modelo Pais
    public function pais()
    {
        return $this->belongsTo(Pais::class, 'Pais_idPais');
    }

    // Relación con el modelo HistorialConsulta
    public function historialConsultas()
    {
        return $this->hasMany(HistorialConsulta::class, 'Ciudades_idCiudades');
    }

    // Relación con el modelo Clima
    public function clima()
    {
        return $this->hasMany(Clima::class, 'Ciudades_idCiudades');
    }
}

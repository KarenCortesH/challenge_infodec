<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TasasCambio extends Model
{
    use HasFactory;

    protected $fillable = ['tarifa', 'presupuesto'];

    // Relación con el modelo TiposCambioMonedas
    public function tiposCambioMonedas()
    {
        return $this->hasMany(TiposCambioMonedas::class, 'Tasas_Cambio_idTasas_Cambio');
    }
}

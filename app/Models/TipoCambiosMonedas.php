<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCambiosMonedas extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function monedas()
    {
        return $this->hasMany(Moneda::class);
    }

    public function tasasCambio()
    {
        return $this->hasMany(TasasCambio::class);
    }
}

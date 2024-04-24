<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clima extends Model
{
    use HasFactory;

    protected $fillable = ['temperatura', 'fecha', 'ciudad_id'];

    // Relación con el modelo Ciudad
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }
}

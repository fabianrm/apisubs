<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    public function suscripciones()
    {
        return $this->hasMany(Suscripcion::class, 'id_metodo_pago');
    }
}

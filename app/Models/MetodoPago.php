<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{

    protected $guarded = ['id'];

    public function suscripciones()
    {
        return $this->hasMany(Suscripcion::class, 'id_metodo_pago');
    }
}

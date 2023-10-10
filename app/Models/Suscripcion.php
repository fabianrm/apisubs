<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{

    protected $table = 'suscripciones';
    public function suscriptor()
    {
        return $this->belongsTo(Suscriptor::class, 'id_suscriptor');
    }

    public function metodoPago()
    {
        return $this->belongsTo(MetodoPago::class, 'id_metodo_pago');
    }
}

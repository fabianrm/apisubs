<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suscriptor extends Model
{

    protected $fillable = [
        'dni',
        'nombre',
        'apellidos',
        'direccion',
        'ciudad',
        'telefono',
        'email',
    ];

    public function suscripciones()
    {
        return $this->hasMany(Suscripcion::class, 'id_suscriptor');
    }
}

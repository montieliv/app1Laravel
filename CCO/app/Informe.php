<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    protected $table='informes';

    public function trabajador()
    {
        return $this->hasOne('App\Trabajador');
    }
}

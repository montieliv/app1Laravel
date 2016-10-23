<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table='trabajadores';

    protected $fillable = ['ficha', 'apat', 'amat', 'name', 'sex'];

    public function informe()
    {
        return $this->belongsTo('App\Informe');
    }
}

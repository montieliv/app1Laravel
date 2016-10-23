<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escalafon extends Model
{
    protected $table='escalafones';

    protected $fillable = ['name','nivel'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    //
    protected $fillable = ['name'];

    public function odontologo()
    {
        return $this->hasMany('App\Odontologo');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gabinete extends Model
{
    //
    protected $fillable = ['especificaciones'];

    public function sesion(){
        return $this->hasMany('App\Sesion');
    }
}

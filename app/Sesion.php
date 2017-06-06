<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    //
    protected $fillable = ['fecha','observaciones','gabinete_id','tratamiento_id'];

    public function odontologo(){
        return $this->belongsTo('App\Odontologo');
    }

    public function paciente(){
        return $this->belongsTo('App\Paciente');
    }

    public function tratamiento(){
        return $this->belongsTo('App\Tratamiento');
    }

    public function gabinete(){
        return $this->belongsTo('App\Gabinete');
    }
}

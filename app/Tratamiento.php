<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    //
    protected $fillable = ['fechainicio','fechafin','descripcion','odontologo_id','paciente_id'];

    public function odontologo(){
        return $this->belongsTo('App\Odontologo');
    }

    public function paciente(){
        return $this->belongsTo('App\Paciente');
    }

    public function sesion(){
        return $this->hasMany('App\Sesion');
    }

}

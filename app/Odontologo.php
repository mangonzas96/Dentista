<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odontologo extends Model
{
    //
    protected $fillable = ['surname','telefono','direccion','numcolegiado', 'especialidad_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function especialidad(){
        return $this->belongsTo('App\Especialidad');
    }

    public function tratamiento()
    {
        return $this->hasMany('App\Tratamiento');
    }

    public function getFullNameAttribute()
    {
        return $this->name .' '.$this->surname;
    }
}

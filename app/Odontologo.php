<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odontologo extends Model
{
    //
    protected $fillable = ['user_id','numcolegiado', 'especialidad_id'];

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

    public function sesion()
    {
        return $this->hasMany('App\Sesion');
    }

    public function getFullNameAttribute()
    {
        return $this->user->name .' '.$this->user->surname;
    }
}

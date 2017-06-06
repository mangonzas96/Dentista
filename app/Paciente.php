<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $fillable = ['name','surname','email','dni','telefono','direccion','fechanacimiento','aseguradora_id'];

    public function sesion()
    {
        return $this->hasMany('App\Sesion');
    }

    public function tratamiento(){
        return $this->hasMany('App\Tratamiento');
    }


    public function getFullNameAttribute()
    {
        return $this->name .' '.$this->surname;
    }

    /*
     *
    public function citas()
    {
        return $this->hasMany('App\Cita');
    }
    public function getFullNameAttribute()
    {
        return $this->name .' '.$this->surname;
    }
    protected $fillable = ['name', 'surname', 'nuhsa'];

    public function citas()
    {
        return $this->hasMany('App\Cita');
    }


    public function getFullNameAttribute()
    {
        return $this->name .' '.$this->surname;
    }
     */
}

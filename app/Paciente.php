<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $fillable = ['user_id','dni','fechanacimiento','aseguradora_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function aseguradora()
    {
        return $this->hasOne('App\Aseguradora');
    }

    public function sesion()
    {
        return $this->hasMany('App\Sesion');
    }

    public function tratamiento(){
        return $this->hasMany('App\Tratamiento');
    }


    public function getFullNameAttribute()
    {
        return $this->user->name .' '.$this->user->surname;
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

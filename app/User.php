<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'surname', 'telefono', 'email', 'direccion','password',
    ];

    public function odontologo(){
        return $this -> hasOne('App\Odontologo');
    }

    public function paciente(){
        return $this -> hasOne('App\Paciente');
    }

    public function getFullNameAttribute()
    {
        return $this->name .' '.$this->surname;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

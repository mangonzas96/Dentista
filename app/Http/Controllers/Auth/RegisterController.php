<?php

namespace App\Http\Controllers\Auth;

use App\Especialidad;
use App\Odontologo;
use App\User;
use App\Paciente;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showRegistrationForm()
    {

        $especialidades = Especialidad::all()->pluck('name','id');
        return view('auth.register')->with('especialidades', $especialidades);

    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'telefono' => $data['telefono'],
            'email' => $data['email'],
            'direccion' => $data['direccion'],
            'password' => bcrypt($data['password']),
        ]);
        if(isset($data['numcolegiado'])){

            /*$odontologo = Odontologo::crate([
                'numcolegiado' => $data['numcolegiado'],
                'especialidad_id' => $data['especialidad_id'],
                ]);*/

            $odontologo = new Odontologo($data);
            $odontologo->user_id=$user->id;
            $odontologo->save();

        } elseif(isset($data['dni'])){

            $paciente = new Paciente($data);
            $paciente->user_id=$user->id;
            $paciente->save();
        }
        return $user;
    }
}
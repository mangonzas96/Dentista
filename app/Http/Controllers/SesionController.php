<?php

namespace App\Http\Controllers;

use App\Odontologo;
use App\Paciente;
use App\Tratamiento;
use App\Sesion;
use App\Gabinete;
use Illuminate\Http\Request;

class SesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sesions = Sesion::all();

        return view('sesions/index',['sesions'=>$sesions]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gabinetes = Gabinete::all()->pluck('full_name','id');

        $tratamientos = Tratamiento::all()->pluck('full_name','id');

        $odontologos = Odontologo::all()->pluck('full_name','id');

        $pacientes = Paciente::all()->pluck('full_name','id');


        return view('sesions/create',['gabinetes'=>$gabinetes,'tratamientos'=>$tratamientos, 'odontologos'=>$odontologos, 'pacientes'=>$pacientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gabinete_id' => 'required|exists:medicos,id',
            'tratamiento_id'  => 'required|exists:medicos,id',
            'medico_id' => 'required|exists:medicos,id',
            'paciente_id' => 'required|exists:pacientes,id',
            'fecha' => 'required|date|after:now',
            'observaciones' => 'required|max:255',

        ]);

        $sesion = new Sesion($request->all());
        $sesion->save();


        flash('Sesion creada correctamente');

        return redirect()->route('sesions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function show(Sesion $sesion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function edit(Sesion $id)
    {
        $sesion = Sesion::find($id);

        $gabinetes = Gabinete::all()->pluck('full_name','id');

        $tratamientos = Tratamiento::all()->pluck('full_name','id');

        $odontologos = Odontologo::all()->pluck('full_name','id');

        $pacientes = Paciente::all()->pluck('full_name','id');


        return view('sesions/edit',['gabinetes'=>$gabinetes,'tratamientos'=>$tratamientos,'sesion'=> $sesion, 'odontologos'=>$odontologos, 'pacientes'=>$pacientes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sesion $id)
    {
        $this->validate($request, [
            'gabinete_id' => 'required|exists:medicos,id',
            'tratamiento_id'  => 'required|exists:medicos,id',
            'medico_id' => 'required|exists:medicos,id',
            'paciente_id' => 'required|exists:pacientes,id',
            'fecha' => 'required|date|after:now',
            'observaciones' => 'required|max:255',

        ]);
        $sesion = Sesion::find($id);
        $sesion->fill($request->all());

        $sesion->save();

        flash('Sesion modificada correctamente');

        return redirect()->route('sesions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sesion $id)
    {
        $sesion = Sesion::find($id);
        $sesion->delete();
        flash('Sesion borrada correctamente');

        return redirect()->route('sesions.index');
    }
}

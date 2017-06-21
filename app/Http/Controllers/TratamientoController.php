<?php

namespace App\Http\Controllers;

use App\Odontologo;
use App\Tratamiento;
use Illuminate\Http\Request;

class TratamientoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tratamientos = Tratamiento::all();

        return view('tratamientos/index',['tratamientos'=>$tratamientos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $odontologos = Odontologo::all()->pluck('full_name','id');

        $pacientes = Paciente::all()->pluck('full_name','id');


        return view('tratamientos/create',['odontologos'=>$odontologos, 'pacientes'=>$pacientes]);
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
            'odontologo_id' => 'required|exists:medicos,id',
            'paciente_id' => 'required|exists:pacientes,id',
            'fechainicio' => 'required|date|after:now',
            'fechafin' => 'required|date|after:now',
            'descripcion' => 'required|max:255'

        ]);

        $tratamiento = new Tratamiento($request->all());
        $tratamiento->save();


        flash('Tratamiento creado correctamente');

        return redirect()->route('tratamientos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function show(Tratamiento $tratamiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Tratamiento $id)
    {
        $tratamientos = Tratamiento::find($id);

        $odontologos = Odontologo::all()->pluck('full_name','id');

        $pacientes = Paciente::all()->pluck('full_name','id');


        return view('tratamientos/create',['odontologos'=>$odontologos, 'pacientes'=>$pacientes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tratamiento $id)
    {
        $this->validate($request, [
            'odontologo_id' => 'required|exists:medicos,id',
            'paciente_id' => 'required|exists:pacientes,id',
            'fechainicio' => 'required|date|after:now',
            'fechafin' => 'required|date|after:now',
            'descripcion' => 'required|max:255'

        ]);
        $tratamiento = Tratamiento::find($id);
        $tratamiento->fill($request->all());

        $tratamiento->save();

        flash('Tratamiento modificado correctamente');

        return redirect()->route('tratamientos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tratamiento $id)
    {
        $tratamiento = Tratamiento::find($id);
        $tratamiento->delete();
        flash('Tratamiento borrado correctamente');

        return redirect()->route('citas.index');
    }
}

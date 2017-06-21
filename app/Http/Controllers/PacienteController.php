<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\User;
use App\Aseguradora;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pacientes = Paciente::all();
        return view('pacientes/index',['pacientes'=>$pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $aseguradoras = Aseguradora::all()->pluck('name','id');
        return view('pacientes/create',['aseguradoras'=>$aseguradoras]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'telefono' => 'required|max:9',
            'email' => 'required|max:255',
            'direccion' => 'max:255',
            'dni' => 'required|max:9',
            'aseguradora_id' => 'required|exists:aseguradoras,id',
        ]);

        $paciente = new Paciente($request->all());
        $paciente->save();

        flash('Paciente creado correctamente');

        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //return view('pacientes/show');
        return view ('pacientes/show',['paciente'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $paciente = Paciente::find($id);
        $aseguradoras = Aseguradora::all()->pluck('name','id');
        return view('pacientes/edit',['paciente'=> $paciente, 'aseguradoras'=>$aseguradoras]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'telefono' => 'required|max:9',
            'email' => 'required|max:255',
            'direccion' => 'max:255',
            'dni' => 'required|max:9',
            'aseguradora_id' => 'required|exists:aseguradoras,id',
        ]);

        $paciente = Paciente::find($id);
        $paciente->fill($request->all());
        $paciente->save();

        flash('Paciente modificado correctamente');

        return redirect()->route('pacientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $paciente = Paciente::find($id);
        $paciente->delete();
        flash('Paciente borrado correctamente');

        return redirect()->route('pacientes.index');
    }
}

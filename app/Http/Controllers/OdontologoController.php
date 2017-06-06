<?php

namespace App\Http\Controllers;

use App\Odontologo;
use App\Especialidad;
use Illuminate\Http\Request;

class OdontologoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $odontologos = Odontologo::all();
        return view('odontologos/index',['odontologos'=>$odontologos]);
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::find('user_id');
        $especialidades = Especialidad::all()->pluck('name','id');
        return view('odontologos/create',['users'=>$users],['especialidads'=>$especialidades]);
        //
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
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'telefono' => 'required|max:255',
            'direccion' => 'max:255',
            'numcolegiado' => 'required',
            'especialidad_id' => 'required|exists:especialidads,id',
        ]);

        $odontologo = new Odontologo($request->all());
        $odontologo->save();

        flash('Odontólogo creado correctamente');

        return redirect()->route('odontologos.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Odontologo  $odontologo
     * @return \Illuminate\Http\Response
     */
    public function show(Odontologo $odontologo)
    {
        return view('odontologos/show');
        //
        /* Según proyecto ClinicaDental
        return view('odontologo.profile', ['odontologo' => User::findOrFail($id)]);
         *

         */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Odontologo  $odontologo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $odontologo = Odontologo::find($id);
        $especialidades = Especialidad::all()->pluck('name','id');
        return view('medicos/edit',['medico'=> $odontologo, 'especialidades'=>$especialidades]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Odontologo  $odontologo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'telefono' => 'required|max:255',
            'direccion' => 'max:255',
            'numcolegiado' => 'required',
            'especialidad_id' => 'required|exists:especialidads,id',
        ]);

        $odontologo = Odontologo::find($id);
        $odontologo->fill($request->all());
        $odontologo->save();

        flash('Odontólogo modificado correctamente');

        return redirect()->route('odontologos.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Odontologo  $odontologo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $odontologo = Odontologo::find($id);
        $odontologo->delete();
        flash('Odontólogo borrado correctamente');

        return redirect()->route('odontologos.index');
        //
    }
}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar sesion</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($sesion, [ 'route' => ['sesions.update',$sesion->id], 'method'=>'PUT', 'class'=>'form-inline']) !!}
                        <div class="form-group">
                            {!! Form::label('fecha', 'Fecha de la sesion') !!}
                            {!! Form::text('fecha',$sesion->fecha,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('observaciones', 'Observaciones de la sesion') !!}
                            {!! Form::text('observaciones',$sesion->observaciones,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('gabinete_id', 'Gabinete de la sesion') !!}
                            <br>
                            {!! Form::select('gabinete_id', $gabinetes, $sesion->gabinete_id , ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('tratamiento_id', 'Tratamiento de la sesion') !!}
                            <br>
                            {!! Form::select('tratamiento_id', $tratamientos, $sesion->tratamiento_id ,['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('odontologo_id', 'Odontólogo de la sesion') !!}
                            <br>
                            {!! Form::select('odontologo_id', $odontologos, $sesion->odontologo_id ,['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('paciente_id', 'Paciente de la sesion') !!}
                            <br>
                            {!! Form::select('paciente_id', $pacientes, $sesion->paciente_id , ['class' => 'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
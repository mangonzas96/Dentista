@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar tratamiento</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($tratamiento, [ 'route' => ['tratamiento.update',$tratamiento->id], 'method'=>'PUT', 'class'=>'form-inline']) !!}
                        <div class="form-group">
                            {!! Form::label('fechainicio', 'Fecha inicio del tratamiento') !!}
                            {!! Form::text('fechainicio',$tratamiento->fechainicio,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fechafin', 'Fecha fin del tratamiento') !!}
                            {!! Form::text('fechafin',$tratamiento->fechafin,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('descripcion', 'Descripción del tratamiento') !!}
                            {!! Form::text('descripcion',$tratamiento->descripcion,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('odontologo_id', 'Odontólogo del tratamiento') !!}
                            <br>
                            {!! Form::select('odontologo_id', $odontologos, $tratamiento->odontologo_id ,['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('paciente_id', 'Paciente del tratamiento') !!}
                            <br>
                            {!! Form::select('paciente_id', $pacientes, $tratamiento->paciente_id ,['class' => 'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar paciente</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($paciente, [ 'route' => ['pacientes.update',$paciente->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del paciente') !!}
                            {!! Form::text('name',$paciente->name,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname', 'Apellidos del paciente') !!}
                            {!! Form::text('surname',$paciente->surname,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('dni', 'DNI del paciente') !!}
                            {!! Form::text('dni',$paciente->dni,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fechanacimiento', 'Fecha de nacimiento del paciente') !!}
                            {!! Form::text('fechanacimiento',$paciente->fechanacimiento,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('telefono', 'Teléfono del paciente') !!}
                            {!! Form::text('telefono',$paciente->telefono,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email del paciente') !!}
                            {!! Form::text('email',$paciente->email,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('direccion', 'Dirección del paciente') !!}
                            {!! Form::text('direccion',$paciente->direccion,['class'=>'form-control', 'required']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

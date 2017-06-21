@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar odontologo</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($odontologo, [ 'route' => ['odontologos.update',$odontologo->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del odontólogo') !!}
                            {!! Form::text('name',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname', 'Apellidos del odontólogo') !!}
                            {!! Form::text('surname',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('numcolegiado', 'Número de colegiado') !!}
                            {!! Form::text('numcolegiado',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('telefono', 'Teléfono del odontólogo') !!}
                            {!! Form::text('telefono',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email del odontólogo') !!}
                            {!! Form::text('email',null,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('direccion', 'Dirección del odontólogo') !!}
                            {!! Form::text('direccion',null,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('especialidad_id', 'Especialidad del odontólogo') !!}
                            <br>
                            {!! Form::select('especialidad_id', $especialidads, ['class' => 'form-control', 'required']) !!}
                        </div>


                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

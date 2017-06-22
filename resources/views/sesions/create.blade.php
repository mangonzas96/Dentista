@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear sesion</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'sesions.store', 'method' => 'post']) !!}

                        <div class="form-group">
                            {!! Form::label('fecha', 'Fecha de la sesion') !!}
                            <input type="datetime-local" id="fecha" name="fecha" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />

                        </div>
                        <div class="form-group">
                            {!! Form::label('observaciones', 'Observaciones de la sesion') !!}
                            {!! Form::text('observaciones',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('gabinete_id', 'Gabinete de la sesion') !!}
                            <br>
                            {!! Form::select('gabinete_id', $gabinetes, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('tratamiento_id', 'Tratamiento de la sesion') !!}
                            <br>
                            {!! Form::select('tratamiento_id', $tratamientos, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('odontologo_id', 'Odontólogo del tratamiento') !!}
                            <br>
                            {!! Form::select('odontologo_id', $odontologos, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('paciente_id', 'Paciente del tratamiento') !!}
                            <br>
                            {!! Form::select('paciente_id', $pacientes, ['class' => 'form-control', 'required']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
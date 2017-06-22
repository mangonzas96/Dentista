@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar gabinete</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($gabinetes, [ 'route' => ['gabinetes.update',$gabinetes->id], 'method'=>'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('especificaciones', 'gabinetes') !!}
                            {!! Form::text('especificaciones',$gabinetes->especificaciones,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
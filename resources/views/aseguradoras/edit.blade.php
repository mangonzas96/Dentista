@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar aseguradora</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($aseguradora, [ 'route' => ['aseguradora.update',$tratamiento->id], 'method'=>'PUT', 'class'=>'form-inline']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre de la aseguradora') !!}
                            {!! Form::text('name',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
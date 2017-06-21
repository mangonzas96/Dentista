@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Sesiones</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'sesions.create', 'method' => 'get', 'class'=>'inline-important']) !!}
                        {!!   Form::submit('Crear sesiones', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        {!! Form::open(['route' => 'sesions.destroyAll', 'method' => 'delete', 'class'=>'inline-important']) !!}
                        {!!   Form::submit('Borrar todas', ['class'=> 'btn btn-danger','onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>

                                <th>Fecha</th>
                                <th>Observaciones</th>
                                <th>Gabinete</th>
                                <th>Tratamiento</th>
                                <th>Odontólogo</th>
                                <th>Paciente</th>

                                <th colspan="2">Acciones</th>
                            </tr>
                            @foreach ($tratamientos as $tratamiento)
                            <tr>

                                <td>{{ $sesion->fecha }}</td>
                                <td>{{ $sesion->observaciones }}</td>
                                <td>{{ $sesion->gabinete->name }}</td>
                                <td>{{ $sesion->tratamiento->descripcion }}</td>
                                <td>{{ $sesion->odontologo->name }}</td>
                                <td>{{ $sesion->paciente->name }}</td>

                                <td>
                                    {!! Form::open(['route' => ['sesions.edit',$sesion->id], 'method' => 'get']) !!}
                                    {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}

                                </td>
                                <td>
                                    {!! Form::open(['route' => ['sesions.destroy',$sesion->id], 'method' => 'delete']) !!}
                                    {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection
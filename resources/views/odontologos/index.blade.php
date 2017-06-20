@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Odontologos</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'odontologos.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear odontologo', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Número de Colegiado</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Dirección</th>
                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($odontologos as $odontologo)


                                <tr>
                                    <td>{{ $odontologo->name }}</td>
                                    <td>{{ $odontologo->surname }}</td>
                                    <td>{{ $odontologo->numcolegiado}}</td>
                                    <td>{{ $odontologo->telefono}}</td>
                                    <td>{{ $odontologo->email}}</td>
                                    <td>{{ $odontologo->direccion}}</td>


                                    <td>
                                        {!! Form::open(['route' => ['odontologos.edit',$odontologo->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['odontologos.destroy',$odontologo->id], 'method' => 'delete']) !!}
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
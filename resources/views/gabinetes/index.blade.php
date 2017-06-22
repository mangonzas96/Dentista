@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Gabinetes</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'gabinetes.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear gabinete', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        {!! Form::open(['route' => 'gabinetes.destroyAll', 'method' => 'delete']) !!}
                        {!!   Form::submit('Borrar todos los gabinetes', ['class'=> 'btn btn-danger','onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Especificaciones</th>
                                <th colspan="2">Acciones</th>
                            </tr>
                            @foreach ($gabinetes as $gabinete)
                            <tr>
                                <td>{{ $gabinete->fullname }}</td>
                                <td>
                                    {!! Form::open(['route' => ['gabinetes.edit',$gabinete->id], 'method' => 'get']) !!}
                                    {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}

                                </td>
                                <td>
                                    {!! Form::open(['route' => ['gabinetes.destroy',$gabinete->id], 'method' => 'delete']) !!}
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
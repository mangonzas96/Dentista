@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Gabinetes</div>

                    <div class="panel-body">
                        @include('flash::message')

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

                            </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection
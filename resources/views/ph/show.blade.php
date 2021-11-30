@extends('adminlte::page')

@section('title', 'Titulacion')
@section('content_header')
    <h1>PH</h1>
@stop
@section('content')
    <div class="container">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Ph {{ $ph->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/ph') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/ph/' . $ph->id . '/edit') }}" title="Edit Ph"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('ph' . '/' . $ph->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Ph" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $ph->id }}</td>
                                    </tr>
                                    <tr><th> Descripcion </th><td> {{ $ph->descripcion }} </td></tr><tr><th> Nivel </th><td> {{ $ph->Nivel }} </td></tr><tr><th> Tiempo </th><td> {{ $ph->updated_at }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

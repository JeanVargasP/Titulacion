@extends('adminlte::page')

@section('title', 'Titulacion')
@section('content_header')
    <h1>Temperatura</h1>
@stop
@section('content')
    <div class="container">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Temperatura {{ $temperatura->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/temperatura') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/temperatura/' . $temperatura->id . '/edit') }}" title="Edit Temperatura"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('temperatura' . '/' . $temperatura->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Temperatura" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $temperatura->id }}</td>
                                    </tr>
                                    <tr><th> Descripcion </th><td> {{ $temperatura->descripcion }} </td></tr><tr><th> Grados </th><td> {{ $temperatura->Grados }} </td></tr><tr><th> Tiempo </th><td> {{ $temperatura->updated_at }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

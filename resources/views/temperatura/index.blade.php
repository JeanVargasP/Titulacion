@extends('adminlte::page')

@section('title', 'Titulacion')
@section('content_header')
    <h1>Temperatura</h1>
@stop
    


@section('content')
    <div class="container">
            
            
            <div class="col-md-15">
                <div class="card">
                    <div class="card-header">Temperatura</div>
                    <div class="card-body">
                        <a href="{{ url('/temperatura/create') }}" class="btn btn-success btn-sm" title="Agregar Temperatura">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar
                        </a>

                        <form method="GET" action="{{ url('/temperatura') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Descripcion</th><th>Grados</th><th>Tiempo</th>><th>Estado</th><th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($temperatura as $item)
                                        
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        
                                        <td>{{ $item->descripcion }}</td><td>{{ $item->Grados }}</td><td>{{ $item->updated_at }}</td><td>{{ $item->estado }}</td>
                                        <td>
                                            <a href="{{ url('/temperatura/' . $item->id) }}" title="View Temperatura"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <form method="POST" action="{{ url('/temperatura' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Temperatura" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                                 </form>
                                                
                                        
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $temperatura->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

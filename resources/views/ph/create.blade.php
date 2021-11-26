@extends('adminlte::page')

@section('title', 'PH')
@section('content_header')
    <h1>Ph</h1>
@stop
@section('content')
    <div class="container">
        
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Agregar </div>
                    <div class="card-body">
                        <a href="{{ url('/ph') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/ph') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('ph.form', ['formMode' => 'Agregar'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

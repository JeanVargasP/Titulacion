@extends('adminlte::page')

@section('title', 'Titulacion')

@section('content_header')
    <h1>PARAMETROS</h1>
@stop

@section('content')

        <div class="row">
            <div class="col-sm-3">  
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">TEMPERATURA</h5>
                        </div>
                        <table class="table">
                        <img class="mx-auto d-block " src="img/temperatura.jpg" alt="" width="200" height="200"/img>
                        <div class="card-body">
                            {{--  <p class="card-text">{{$actual['celsius']}}</p>--}}
                        
                                        <p class="card-text">Grados:   {{$celsius->Grados}} º</p>
                                        <p class="card-text">Tiempo:   {{$celsius->updated_at}}</p>
                                        @if ($celsius->Grados >=32 && $celsius->estado == 0)
                                            <div class="alert alert-danger" role="alert">
                                                <li>{{ "La temperatura esta muy elevada se recomienda activar la ventilacion" }}</li>
                                            </div>
                                        @elseif ($celsius->Grados <=26 && $celsius->estado == 0)
                                            <div class="alert alert-default-primary" role="alert">
                                                <li>{{ "La temperatura esta muy bajo se recomienda apagar la ventilacion" }}</li>
                                            </div>
                                        @endif
                           
                            
                            <a href="#" class="btn btn-success mx-auto d-block">Activar</a>  
                        </table>
                    </div>
            </div>  
            <div class="col-sm-3">  
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">PH</h5>
                    </div>       
                    <table class="table">
                        <img class="mx-auto d-block " src="img/ph2.jpg" alt="" width="200   " height="200"/img>
                                 <div class="card-body">
                                {{--      <p class="card-text">{{$actual['ph']}}</p>
                              --}}
                                    <p class="card-text">Nivel de Ph:      {{$phs->Nivel}}</p>
                                    <p class="card-text">Tiempo:    {{$phs->updated_at}}</p>
                                @if ($phs->Nivel >=8 && $phs->estado == 0)
                                        <div class="alert alert-danger" role="alert">
                                            <li>{{ "El ph esta muy elevado se recomienda activar la validacion del ph" }}</li>
                                        </div>
                                @elseif ($phs->Nivel <=6 && $phs->estado == 0)
                                   <div class="alert alert-default-primary" role="alert">
                                    <li>{{ "El ph esta muy bajo se recomienda veificar la validacion del ph" }}</li>
                                        </div>
                                @endif
                            
                        <a href="#" class="btn btn-success mx-auto d-block">Activar</a>
                                 </table>
                </div>
            </div>
            <div class="col-sm-3">  
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Nivel De Agua</h5>
                    </div>       
                    <table class="table">
                        <img class="mx-auto d-block " src="img/descarga.jpg" alt="" width="200   " height="200"/img>
                                 <div class="card-body">
                                   {{--   <p class="card-text">{{$actual['water_level']}}</p>
                                    <p class="card-text">{{$actual['created']}}</p>
                                  --}}
                                    <p class="card-text">Nivel de Agua:      {{$phs->Nivel}}  m3</p>
                                    <p class="card-text">Tiempo:    {{$phs->updated_at}}</p>
                                
                        <a href="#" class="btn btn-success mx-auto d-block">Activar</a>
                                 </table>
                </div>
            </div>
            
            </div>  
                        

            <main class="py-4">
                <div id="temperatura" class="alert mx-3 invisible">test</div>
              </main>

              
              
@stop

@section('css')
    <link rel="stylesheet" href="/css/app">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    
@stop

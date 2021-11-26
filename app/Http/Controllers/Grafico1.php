<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\temperatura;


class Grafico1 extends Controller
{
    
    public function index(){
         /**futuro borrar*/
         $graficos = temperatura::all();

         $puntos=[];
         foreach($graficos as $grafico){
                 $puntos['name'][] = $grafico['descripcion'];
                 
                 $puntos['datos'][] = $grafico['Grados'];
                 
         }
         $puntos['data'] = json_encode($puntos);
         return view('Grafico1',$puntos);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temperatura;
use App\Models\ph;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $celsiusa = temperatura::all();
        $phsa = ph::all();
        /*   $tilapia = HTTP::get('http://108.175.14.214:9001/api/v1/sensor-data/');
        $actual= $tilapia->json();
        $actual1 = head($actual);
        return view('home', compact('actual1'));
     */
            $celsius = $celsiusa->last();
            $phs = $phsa->last();
       



            return view('home',compact('celsius','phs'));
        }
}

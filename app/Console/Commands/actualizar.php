<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http\HomeController;
use Illuminate\Support\Facades\Http;




class actualizar extends Command 
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parametro:actualizar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualizar parametros';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tilapia = HTTP::get('http://108.175.14.214:9001/api/v1/sensor-data/last-record');
        $actual= $tilapia->json();
        return view('home', compact('actual'));
    
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Grafico1;
use App\Http\Controllers\PhController;
use Illuminate\Support\Facades\auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('temperatura', 'App\Http\Controllers\TemperaturaController');

Route::get('Grafico1',[Grafico1::class,'index']);
Route::resource('ph', 'App\Http\Controllers\PhController');

Route::get('Grafico2',[PhController::class,'chart']);

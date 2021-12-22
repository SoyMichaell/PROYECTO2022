<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('configuracion', [App\Http\Controllers\ConfiguracionController::class, 'index']);

Route::get('/estadoprograma/pdf', [App\Http\Controllers\EstadoProgramaController::class, 'pdf']);

Route::resource('estadoprograma', App\Http\Controllers\EstadoProgramaController::class);

Route::get('/departamento/pdf', [App\Http\Controllers\DepartamentoController::class, 'pdf']);

Route::resource('departamento', App\Http\Controllers\DepartamentoController::class);

Route::get('/municipio/pdf', [App\Http\Controllers\MunicipioController::class, 'pdf']);

Route::resource('municipio', App\Http\Controllers\MunicipioController::class);

Route::get('/facultad/pdf', [App\Http\Controllers\FacultadController::class, 'pdf']);

Route::resource('facultad', App\Http\Controllers\FacultadController::class);

Route::get('/nivelformacion/pdf', [App\Http\Controllers\NivelFormacionController::class, 'pdf']);

Route::resource('nivelformacion', App\Http\Controllers\NivelFormacionController::class);

Route::get('/metodologia/pdf', [App\Http\Controllers\MetodologiaController::class, 'pdf']);

Route::resource('metodologia', App\Http\Controllers\MetodologiaController::class);

Route::get('/programa/pdf', [App\Http\Controllers\ProgramaController::class, 'pdf']);

Route::resource('programa', App\Http\Controllers\ProgramaController::class);






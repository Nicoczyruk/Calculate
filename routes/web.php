<?php
use App\Http\Controllers\CalculationController;
use App\Http\Controllers\PromedioController;
use App\Http\Controllers\ContactoController;
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
    return view('welcome');
});



Route::get('/calculate', [CalculationController::class, 'showForm'])->name('calculate.form');
Route::post('/calculate', [CalculationController::class, 'calculate'])->name('calculate.result');

Route::get('/saludo', [App\Http\Controllers\mensajesController::class, 'saludo'])->name('saludo.form');

Route::get('/promedio', [PromedioController::class, 'mostrarFormulario'])->name('promedio.form');
Route::post('/promedio', [PromedioController::class, 'calcularPromedio'])->name('promedio.calcular');

Route::get('/contacto', [ContactoController::class, 'mostrarFormulario'])->name('contacto.form');
Route::post('/contacto', [ContactoController::class, 'guardarContacto'])->name('contacto.guardar');
Route::get('/contacto/lista', [ContactoController::class, 'mostrarLista'])->name('contacto.lista');
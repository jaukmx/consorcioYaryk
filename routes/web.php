<?php
use App\Http\Controllers\ConstruccionController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\RentaventaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContactoController;
use App\Models;
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

Route::resource('/construccion',ConstruccionController::class);
//Route::get('/construccion', [ConstruccionController::class, 'index'])->middleware('auth');



Route::resource('/mantenimiento',MantenimientoController::class);

Route::resource('/renta-venta',RentaventaController::class);

Route::resource('/clientes',ClienteController::class);

Route::resource('/contacto',ContactoController::class );

Route::get('/nosotros', function () {
    return view('laempresa');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

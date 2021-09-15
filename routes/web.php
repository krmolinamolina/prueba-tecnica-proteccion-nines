<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\inventario\VentasController;
use App\Http\Controllers\inventario\ComprasController;
use App\Http\Controllers\inventario\InventarioController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('dashboard/inventario/ventas',  [VentasController::class, 'index'])->name('ventas.index');
    Route::get('dashboard/inventario/ventas/create',  [VentasController::class, 'create'])->name('ventas.create');
    Route::post('dashboard/inventario/ventas/store',  [VentasController::class, 'store'])->name('ventas.store');

    Route::get('dashboard/inventario',  [InventarioController::class, 'index'])->name('inventario.index');
    Route::get('dashboard/inventario/create',  [InventarioController::class, 'create'])->name('inventario.create');
    Route::get('dashboard/inventario/edit/{id}',  [InventarioController::class, 'edit'])->name('inventario.edit');
    Route::post('dashboard/inventario/store',  [InventarioController::class, 'store'])->name('inventario.store');
    Route::put('dashboard/inventario/update/{id}',  [InventarioController::class, 'store'])->name('inventario.update');
    Route::delete('dashboard/inventario/destroy/{id}',  [InventarioController::class, 'destroy'])->name('inventario.destroy');

    Route::get('dashboard/inventario/compra/create',  [ComprasController::class, 'create'])->name('compra.create');
    Route::post('dashboard/inventario/compras/store',  [ComprasController::class, 'store'])->name('compra.store');


    Route::resource('dashboard/user', UserController::class);
});
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para la entidad Cliente
Route::get('clientes', [ClienteController::class, 'index']);
Route::get('clientes/{id}', [ClienteController::class, 'show']);
Route::post('clientes', [ClienteController::class, 'store']);
Route::put('clientes/{id}', [ClienteController::class, 'update']);
Route::delete('clientes/{id}', [ClienteController::class, 'destroy']);

// Rutas para la entidad Empleado
Route::get('empleados', [EmpleadoController::class, 'index']);
Route::get('empleados/{id}', [EmpleadoController::class, 'show']);
Route::post('empleados', [EmpleadoController::class, 'store']);
Route::put('empleados/{id}', [EmpleadoController::class, 'update']);
Route::delete('empleados/{id}', [EmpleadoController::class, 'destroy']);

// Rutas para la entidad Producto
Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/{id}', [ProductoController::class, 'show']);
Route::post('productos', [ProductoController::class, 'store']);
Route::put('productos/{id}', [ProductoController::class, 'update']);
Route::delete('productos/{id}', [ProductoController::class, 'destroy']);

// Rutas para la entidad Venta
Route::get('ventas', [VentaController::class, 'index']);
Route::get('ventas/{id}', [VentaController::class, 'show']);
Route::post('ventas', [VentaController::class, 'store']);
Route::put('ventas/{id}', [VentaController::class, 'update']);
Route::delete('ventas/{id}', [VentaController::class, 'destroy']);

<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
/*
|----------------------------------------------------------------------------------------------------------------
| API Routes
|----------------------------------------------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//

// Rutas para Producto
Route::get('/productos', [ProductoController::class, 'listarProducto']);
Route::post('/productos', [ProductoController::class, 'agregarProducto']);
Route::get('/productos/{id}', [ProductoController::class, 'buscarProducto']);
Route::put('/productos/{id}', [ProductoController::class, 'actualizarProducto']);

// Rutas para Carrito
Route::get('/carritos', [CarritoController::class, 'listarProductoCarrito']);
Route::post('/carritos', [CarritoController::class, 'agregarAlCarrito']);
Route::delete('/carritos/{id}', [CarritoController::class, 'eliminarDelCarrito']);
Route::delete('/carritos', [CarritoController::class, 'vaciarCarrito']);

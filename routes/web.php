<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CompraController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// RUTAS DEL MÓDULO CLIENTES
Route::middleware('auth')->group(function () {
    Route::get('clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('clientes', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy')->middleware('check.admin');
});

// RUTAS DEL MÓDULO PRODUCTOS
Route::middleware('auth')->group(function () {
    Route::get('productos', [ProductoController::class, 'index'])->name('productos.index');
    Route::get('productos/create', [ProductoController::class, 'create'])->name('productos.create');
    Route::post('productos', [ProductoController::class, 'store'])->name('productos.store');
    Route::get('productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
    Route::put('productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
    Route::delete('productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy')->middleware('check.admin');
});

// RUTAS DEL MÓDULO VENTAS
Route::middleware('auth')->group(function () {
    Route::get('ventas', [VentaController::class, 'index'])->name('ventas.index');
    Route::get('ventas/create', [VentaController::class, 'create'])->name('ventas.create');
    Route::post('ventas', [VentaController::class, 'store'])->name('ventas.store');
    Route::get('ventas/{venta}/edit', [VentaController::class, 'edit'])->name('ventas.edit');
    Route::put('ventas/{venta}', [VentaController::class, 'update'])->name('ventas.update');
    Route::delete('ventas/{venta}', [VentaController::class, 'destroy'])->name('ventas.destroy')->middleware('check.admin');
});

// RUTAS DEL MÓDULO PROVEEDORES
Route::middleware('auth')->group(function () {
    Route::get('proveedores', [ProveedorController::class, 'index'])->name('proveedores.index');
    Route::get('proveedores/create', [ProveedorController::class, 'create'])->name('proveedores.create');
    Route::post('proveedores', [ProveedorController::class, 'store'])->name('proveedores.store');
    Route::get('proveedores/{proveedor}/edit', [ProveedorController::class, 'edit'])->name('proveedores.edit');
    Route::put('proveedores/{proveedor}', [ProveedorController::class, 'update'])->name('proveedores.update');
    Route::delete('proveedores/{proveedor}', [ProveedorController::class, 'destroy'])->name('proveedores.destroy')->middleware('check.admin');
});

// RUTAS DEL MÓDULO COMPRAS
Route::middleware('auth')->group(function () {
    Route::get('compras', [CompraController::class, 'index'])->name('compras.index');
    Route::get('compras/create', [CompraController::class, 'create'])->name('compras.create');
    Route::post('compras', [CompraController::class, 'store'])->name('compras.store');
    Route::get('compras/{compra}/edit', [CompraController::class, 'edit'])->name('compras.edit');
    Route::put('compras/{compra}', [CompraController::class, 'update'])->name('compras.update');
    Route::delete('compras/{compra}', [CompraController::class, 'destroy'])->name('compras.destroy')->middleware('check.admin');
});


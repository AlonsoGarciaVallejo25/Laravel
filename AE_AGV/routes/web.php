<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Producto_AGV_Controller;

Route::get('/', [Producto_AGV_Controller::class, 'index'])->name('productos.index');
Route::get('/producto/{id}', [Producto_AGV_Controller::class, 'show'])->name('productos.show');

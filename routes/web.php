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




Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home_system');

    /* Route::get('/', function () {
        return view('welcome');
    }); */

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    //RUTAS PARA LA SECCION DE PEDIDOS
    Route::group(['prefix' => 'pedidos'], function () {
        Route::get('crear', function () {
           return view('orders.create-order');
        })->name('create_order');
    });
});

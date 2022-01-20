<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    //PEDIDOS
    Route::group(['prefix' => 'pedidos'], function () {
        Route::get('crear', [OrderController::class, 'list'])->name('create_order');
    });

    //USUARIOS
    Route::group(['prefix' => 'usuarios'], function () {
        Route::get('listado', [UserController::class, 'index'])->name('list_users');
        Route::get('create', [UserController::class, 'create'])->name('create_user');
        Route::post('store', [UserController::class, 'store'])->name('user.store');
        Route::get('{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('updated', [UserController::class, 'update'])->name('users.update');
        Route::get('permisos', [UserController::class, 'permissions'])->name('users.edit_permissions');
    });
    
    //Permisos
    Route::group(['prefix' => 'permisos'], function () {
        Route::get('index', [PermissionController::class, 'index'])->name('permissions.index');
    });

    //Perfil
    Route::get('perfil', [ProfileController::class, 'index'])->name('user.personal_edit');
});

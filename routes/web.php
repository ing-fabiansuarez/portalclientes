<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
    return view('auth.login');
});

Route::get('users', [UserController::class, 'index'])->name('users.index')
    ->middleware(['auth:sanctum', 'verified']);
Route::get('users/create', [UserController::class, 'create'])->name('users.create')
    ->middleware(['auth:sanctum', 'verified']);
Route::post('users/store', [UserController::class, 'store'])->name('users.store')
    ->middleware(['auth:sanctum', 'verified']);
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit')
    ->middleware(['auth:sanctum', 'verified']);
Route::put('users/{user}', [UserController::class, 'update'])->name('users.update')
    ->middleware(['auth:sanctum', 'verified']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

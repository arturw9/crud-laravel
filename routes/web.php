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
Route::group(['middleware' => 'web'], function (){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'] );
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->middleware('auth');
Route::get('/usuarios/new', [App\Http\Controllers\UsuariosController::class, 'new'])->middleware('auth');
Route::post('/usuarios/add', [App\Http\Controllers\UsuariosController::class, 'add'])->middleware('auth');
Route::get('/usuarios/{id}/edit', [App\Http\Controllers\UsuariosController::class, 'edit'])->middleware('auth');
Route::post('/usuarios/update/{id}', [App\Http\Controllers\UsuariosController::class, 'update'])->middleware('auth');
Route::delete('/usuarios/delete/{id}', [App\Http\Controllers\UsuariosController::class, 'delete'])->middleware('auth');
Route::get('/adress/novo', [App\Http\Controllers\AdressesController::class, 'create']);
Route::post('/adress/novo', [App\Http\Controllers\AdressesController::class, 'store'])->name('salvar_adress');
Route::get('/adresses/ver', [App\Http\Controllers\AdressesController::class, 'show']);
Route::get('/adress/del/{id}', [App\Http\Controllers\AdressesController::class, 'destroy'])->name('excluir_adress');
Route::get('/adress/edit/{id}', [App\Http\Controllers\AdressesController::class, 'edit'])->name('editar_adress');
Route::post('/adress/edit/{id}', [App\Http\Controllers\AdressesController::class, 'update'])->name('atualizar_adress');

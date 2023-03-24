<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\SecureurlController;
use App\Http\Controllers\CerrarSesionController;
use App\Models\User;
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

Route::get('/layout', function () {
    return view('layoutprincipal');
});

Route::get('/registro', [RegistroController::class, 'index'])->name('registro');
Route::post('/registro', [RegistroController::class, 'store']);

Route::get('/sesion', [SesionController::class, 'index'])->name('sesion');
Route::post('/sesion', [SesionController::class, 'store']);

Route::get('/{user:username}', [SecureurlController::class, 'index'])->name('accesoseguro');

Route::post('/logout', [CerrarSesionController::class, 'store'])->name('logout');

//Route::get('/registro', function () {
//    return view('auth.registro');
//});

//Route::get('/layout', function () {
//    return view('auth.sesion');
//});
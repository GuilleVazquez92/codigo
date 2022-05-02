<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarCodeController;
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

Route::get('/admin/generar_codigo', [BarcodeController::class, 'index'])
->name('sistema');
Route::get('/admin/productos', [BarcodeController::class, 'show']);
Route::post('/admin/generar_codigo', [BarcodeController::class, 'cargar'])
->name('generar_codigo');


Route::get('ver', [BarcodeController::class, 'ver']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('users', [App\Http\Controllers\UserController::class, 'index']);
Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout']);
Route::get('user', [App\Http\Controllers\AuthController::class, 'getAuthUser']);


Route::resource('carros', App\Http\Controllers\CarroController::class);
Route::resource('motores', App\Http\Controllers\MotorController::class);
Route::resource('latarias', App\Http\Controllers\LatariaController::class);
Route::resource('pneus', App\Http\Controllers\PneuController::class);
Route::resource('documentos', App\Http\Controllers\DocumentoController::class);
Route::resource('freios', App\Http\Controllers\FreioController::class);
Route::resource('suspensoes', App\Http\Controllers\SuspensaoController::class);
Route::resource('embreagens', App\Http\Controllers\EmbreagemController::class);
Route::resource('sistemas_eletricos', App\Http\Controllers\SistemaEletricoController::class);

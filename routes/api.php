<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CheckListController;
use App\Http\Controllers\CarroItemController;



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


Route::get('users', [UserController::class, 'index']);
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('user', [AuthController::class, 'getAuthUser']);

Route::resource('carros', CarroController::class);
Route::resource('item', ItemController::class);
Route::resource('checklist', CheckListController::class);
Route::get('checklist-last', [ChecklistController::class, 'getLastChecklist']);
Route::get('checklist-resume', [ChecklistController::class, 'resumeLastChecklist']);
Route::put('/checklist/{checklist}/item/{item}', [CheckListController::class, 'updateItemStatus']);
Route::get('checklists-user', [CheckListController::class, 'getUserChecklists']);
Route::middleware('auth')->get('/user/checklists', [CheckListController::class, 'getUserChecklists']);


Route::get('carrosfuel', [CarroController::class, 'indexFuel']);
Route::get('carrosfipe', [CarroController::class, 'indexFipe']);
Route::get('carro/{carro}', [CarroController::class, 'indexCar']);

Route::resource('carro_itens', CarroItemController::class);
// Route::get('/carro_itens/busca', [CarroItemController::class, 'buscarPorCarroEItem']);
Route::get('/carro_itens/{carro_id}/{item_id}', [CarroItemController::class, 'buscarPorCarroEItem']);




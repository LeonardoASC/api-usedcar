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
Route::resource('checklist', App\Http\Controllers\CheckListController::class);
Route::get('checklist-last', [App\Http\Controllers\ChecklistController::class, 'getLastChecklist']);
// Route::get('/user/checklists', [App\Http\Controllers\CheckListController::class, 'getUserChecklists']);
Route::middleware('auth')->get('/user/checklists', [App\Http\Controllers\CheckListController::class, 'getUserChecklists']);


Route::get('carrosfuel', [App\Http\Controllers\CarroController::class, 'indexFuel']);
Route::get('carrosfipe', [App\Http\Controllers\CarroController::class, 'indexFipe']);
Route::get('carro/{carro}', [App\Http\Controllers\CarroController::class, 'indexCar']);

// Route::resource('motores', App\Http\Controllers\MotorController::class);
// Route::resource('latarias', App\Http\Controllers\LatariaController::class);
// Route::resource('pneus', App\Http\Controllers\PneuController::class);
// Route::resource('documentos', App\Http\Controllers\DocumentoController::class);
// Route::resource('freios', App\Http\Controllers\FreioController::class);
// Route::resource('suspensoes', App\Http\Controllers\SuspensaoController::class);
// Route::resource('embreagens', App\Http\Controllers\EmbreagemController::class);
// Route::resource('sistemas_eletricos', App\Http\Controllers\SistemaEletricoController::class);
// Route::resource('pedais', App\Http\Controllers\PedalController::class);
// Route::resource('cambios', App\Http\Controllers\CambioController::class);
// Route::resource('vidros', App\Http\Controllers\VidroController::class);
// Route::resource('assentos', App\Http\Controllers\AssentoController::class);
// Route::resource('acessorios', App\Http\Controllers\AcessorioController::class);
// Route::resource('espelhos', App\Http\Controllers\EspelhoController::class);
// Route::resource('farois', App\Http\Controllers\FarolController::class);
// Route::resource('radios', App\Http\Controllers\RadioController::class);
// Route::resource('ares_condicionados', App\Http\Controllers\ArCondicionadoController::class);

Route::resource('carro_itens', App\Http\Controllers\CarroItemController::class);
// Route::get('/carro_itens/busca', [App\Http\Controllers\CarroItemController::class, 'buscarPorCarroEItem']);
Route::get('/carro_itens/{carro_id}/{item_id}', [App\Http\Controllers\CarroItemController::class, 'buscarPorCarroEItem']);

Route::resource('item', App\Http\Controllers\ItemController::class);




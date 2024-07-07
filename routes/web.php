<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('welcome');
});
Route::get('/listagem', [ListController::class, 'listagem']);
Route::get('/listagem-cliente',[ListController::class, 'listagem_cliente']);
Route::get('/cadastro', [ListController::class, 'cadastroemp']);
Route::get('/cadastro/{id}', [ListController::class, 'edit']);
Route::put('/cadastro/alterar/{id}', [ListController::class, 'alterar_cliente']);
Route::post('/cadastro', [ListController::class, 'store']);
Route::delete('/listagem-cliente/{id}', [ListController::class, 'deletar_cliente']);
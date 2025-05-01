<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiBridgeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/healthy', function () {
    return response()->json(['status' => 'ok', 'message' => 'API is healthy']);
});

##################
# Rotas de proxy #
##################

# Rotas de conexão
Route::post('/Conectar', [ApiBridgeController::class, 'conectar']);
Route::post('/Desconectar', [ApiBridgeController::class, 'desconectar']);

# Rotas de mensagens
Route::get('/Status', [ApiBridgeController::class, 'status']);
Route::get('/MensagensNaFila', [ApiBridgeController::class, 'mensagensNaFila']);
Route::get('/BuscarMensagem', [ApiBridgeController::class, 'buscarMensagem']);
Route::get('/BuscarMensagemMultiplas', [ApiBridgeController::class, 'buscarMensagemMultiplas']);
Route::post('/EnviarMensagem', [ApiBridgeController::class, 'enviarMensagem']);

# Rotas de dicionário
Route::post('/DictAtualizar', [ApiBridgeController::class, 'dictAtualizar']);
Route::post('/DictVerificarChaves', [ApiBridgeController::class, 'dictVerificarChaves']);
Route::post('/DictCriar', [ApiBridgeController::class, 'dictCriar']);
Route::post('/DictConsultar', [ApiBridgeController::class, 'dictConsultar']);
Route::post('/DictConsultarTodasChaves', [ApiBridgeController::class, 'dictConsultarTodasChaves']);

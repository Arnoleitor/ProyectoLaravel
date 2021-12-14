<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\MensajeController;
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

// Route::middleware('auth:sanctum')->get('/usuario', function (Request $request) {
//     return $request->usuario();
// });
//USUARIOS
Route::get('Usuarios', [UsuarioController::class, "showAllUsuario"]);//
Route::post('Usuarios', [UsuarioController::class, "addUsuarios"]);//
Route::get('Usuarios/{id}', [UsuarioController::class, "UsuariosByID"]);//
Route::put('Usuarios', [UsuarioController::class, "UpdateUsuarios"]);//metiendo id en cuerpo
Route::delete('Usuarios/{id}', [UsuarioController::class, "DeleteUsuarios"]);//
//PARTYS --getall,byid del usuario,delete
Route::post('nuevaparty', [PartyController::class, "nuevaparty"]);//funciona pero sin las relaciones
Route::get('nuevaparty', [PartyController::class, "showAllparty"]);//
Route::get('nuevaparty/{id}', [PartyController::class, "showpartyByID"]);//
Route::delete('nuevaparty/{id}', [PartyController::class, "Deleteparty"]);//
Route::put('nuevaparty/{id}', [PartyController::class, "Updateteparty"]);
//JUEGO--todos
Route::post('juego', [JuegoController::class, "createJuego"]);//
Route::get('juego', [JuegoController::class, "showAllJuego"]);//
Route::get('juego/{id}', [JuegoController::class, "showJuegoByID"]);//
Route::put('juego/{id}', [JuegoController::class, "updateJuego"]);
Route::delete('juego/{id}', [JuegoController::class, "deleteJuego"]);//
//MENSAJES--delete--getbyid buscar por id party
Route::post('createMensaje', [MensajeController::class, "createMensaje"]);//
Route::delete('createMensaje', [MensajeController::class, "deleteMensaje"]);
Route::get('createMensaje/{id}', [MensajeController::class, "MensajebyID"]);
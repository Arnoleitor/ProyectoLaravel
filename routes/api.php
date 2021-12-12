<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
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

Route::get('Usuarios', [UsuarioController::class, "showAllUsuario"]);
Route::post('Usuarios', [UsuarioController::class, "addUsuarios"]);
Route::post('UsuariosByID', [UsuarioController::class, "UsuariosByID"]);
Route::put('Usuarios', [UsuarioController::class, "UpdateUsuarios"]);
// Route::delete('Usuarios', [UsuarioController::class, "addUsuarios"]);
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\Usuario;
class UsuarioController extends Controller
{
    //
    public function showAllUsuario(){

        try {
            
        return Usuario::all();

        } catch(QueryException $error) {
            return $error;
        }
    }
    public function addUsuarios(Request $request){//sin id y sin fecha

        $email = $request->input('email');
        $nombre = $request->input('nombre');
        $password = $request->input('password');
        $tipo = $request->input('tipo');
        $raza = $request->input('raza');
        $edad = $request->input('edad');
        $localidad = $request->input('localidad');

        try {

            return Usuario::create(
                [
                    'email' => $email,
                    'nombre' => $nombre,
                    'password' => $password,
                    'tipo' => $tipo,
                    'raza' => $raza,
                    'edad' => $edad,
                    'localidad' => $localidad,
                ]
                );

        } catch (QueryException $error) {
            $codigoError = $error->errorInfo[1];

            
                return response()->json([
                    'error' => $codigoError
                ]);
            
        }

    }
}
    
// public function showProfile(Request $request){

//     $id = $request->input('id');

//     try {

//         return Usuario::all()->where('id', '=', $id)
//         ->makeHidden(['password'])->keyBy('id');

//     } catch (QueryException $error) {
//         return $error;
//     }
// }

// public function registerUser(Request $request){

//     $validatedData = $request->validate([
//         'email' => 'required|email',
//         'nombre' => 'required|string',
//         'password' => 'required|min:8',
//         'tipo' => 'required',
//         'raza' => 'required',
//         'edad' => 'required',
//         'localidad' => 'required|string',
        
//     ], [
//         'name.required' => 'Name is required',
//         'password.required' => 'Password is required',
//         'email.required' => 'Email is required'
//     ]);
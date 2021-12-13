<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\Juego;

class JuegoController extends Controller

{
    
    public function createJuego (Request $request){

        $nombre = $request->input('nombre');
        $compania = $request->input('compania');
        $descripcion = $request->input('descripcion');
        

        try {

            return Juego::create(
                [
                    'nombre' => $nombre,
                    'compania' => $compania,
                    'descripcion' => $descripcion,
                   
                ]
            );

        } catch (QueryException $error) {
            echo"error";
            $codigoError = $error->errorInfo[1];

            if($codigoError){
                return "Error $codigoError";
            }
           
        }
    }
}



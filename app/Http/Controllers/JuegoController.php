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
    //BUSCAR JUEGOS POR ID//
    public function showJuegoByID($id){


        try {
            $Juego = Juego::all()
            ->where('id', "=", $id);
            return $Juego;

        } catch (QueryException $error) {

            $codigoError = $error->errorInfo[1];
            if($codigoError){
                return "Error $codigoError";
            }
        }
        
    }
    
        //
        public function showAllJuego(){
    
            try {
                
            return Juego::all();
    
            } catch(QueryException $error) {
                return $error;
            }
        }
}



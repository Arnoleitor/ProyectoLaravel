<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\Juego;

class JuegoController extends Controller

{
    //CREAR JUEGOS//
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
    
        //VER TODOS LOS JUEGOS//
        public function showAllJuego(){
    
            try {
                
            return Juego::all();
    
            } catch(QueryException $error) {
                return $error;
            }
        }

        //ACTUALIZAR JUEGOS//
        public function updateJuego ( $id, Request $request){

            // $id = $request->input('id');
            $nombre = $request->input('email');
            $compania = $request->input('compania');
            $descripcion = $request->input('descripcion');
            
    
    
            try {
    
                $Juego = Juego::where('id', '=', $id)
                ->update(
                    [
                        'nombre' => $nombre,
                        'compania' => $compania,
                        'descripcion' => $descripcion,
                       
                    ]
                    );
                    return Juego::all()
                    ->where('id', "=", $id);
    
            } catch (QueryException $error) {
                $codigoError = $error->errorInfo[1];
                if($codigoError){
                    return "Error $codigoError";
                }
    
            }
        }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\Party;

class PartyController extends Controller

{
    //
    public function nuevaparty (Request $request){

        
        $nombre = $request->input('nombre');
        $idusuario = $request->input('idusuario');
        $idjuego = $request->input('idjuego');
        

        try {

            return Party::create(
                [
                    'nombre' => $nombre,
                    'idusuario' => $idusuario,
                    'idjuego' => $idjuego,
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
    public function showpartyByID($id){


    try {
        $Party = Party::all()
        ->where('id', "=", $id);
        return $Party;

    } catch (QueryException $error) {

        $codigoError = $error->errorInfo[1];
        if($codigoError){
            return "Error $codigoError";
        }
    }
    
}

}

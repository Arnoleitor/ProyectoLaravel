<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeController extends Controller
{
    
    public function createMensaje (Request $request){

        $idusuario = $request->input('idusuario');
        $idparty = $request->input('idparty');
        
        

        try {

            return Mensaje::create(
                [
                    'idusuario' => $idusuario,
                    'party' => $party,

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\Party;

class PartyController extends Controller

{
    //
    public function party (Request $request){

        $nombre = $request->input('nombre');
        $jugadores = $request->input('jugadores');
        $idgrupo = $request->input('idgrupo');
        $idjuego = $request->input('idjuego');

        try {

            return party::create(
                [
                    'nombre' => $nombre,
                    'jugadores' => $jugadores,
                    'idgrupo' => $idgrupo,
                    'idjuego' => $idjuego
                ]
            );

        } catch (QueryException $error) {

            $codigoError = $error->errorInfo[1];
            if($codigoError){
                return "Error $codigoError";
            }
            
        }
}

}

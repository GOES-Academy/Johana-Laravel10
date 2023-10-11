<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;

use function PHPSTORM_META\type;

class SaludoController extends Controller
{
   public function saludar(Request $request){
    $nombre = $request->input('nombre');

    $validator = Validator::make(['nombre' => $nombre], [
        'nombre' => 'required|string',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    if ($nombre) {
        return "Hola, $nombre. ¡Bienvenid@!";
    } else {
        return "Por favor, proporciona un nombre para saludar.";
    }
   }
}

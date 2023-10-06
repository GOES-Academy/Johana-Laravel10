<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
   public function saludar(Request $request){
    $nombre = $request->input('nombre');

    if ($nombre) {
        return "Hola, $nombre. ¡Bienvenid@!";
    } else {
        return "Por favor, proporciona un nombre para saludar.";
    }
   }
}
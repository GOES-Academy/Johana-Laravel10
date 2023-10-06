<?php

namespace App\Http\Controllers;

class DepartamentoController extends Controller
{
    //Lista de Departamentos
    public function index()
    {
        $departamento = [
            ['id' => 1, 'nombre' => 'Ahuachapan'],
            ['id' => 2, 'nombre' => 'Santa Ana'],
            ['id' => 3, 'nombre' => 'San Salvador'],
            ['id' => 4, 'nombre' => 'La Paz'],
            ['id' => 5, 'nombre' => 'Cuscatlan'],
            ['id' => 6, 'nombre' => 'Morazan'],
            ['id' => 7, 'nombre' => 'La Union'],
            ['id' => 8, 'nombre' => 'Chalatenango'],
            ['id' => 9, 'nombre' => 'Sonsonate'],
            ['id' => 10, 'nombre' => 'La Libertad'],
            ['id' => 11, 'nombre' => 'Cabañas'],
            ['id' => 12, 'nombre' => 'San Miguel'],
            ['id' => 13, 'nombre' => 'San Vicente'],
            ['id' => 14, 'nombre' => 'Usulutan'],
        ];
    return response()->json($departamento);
    }

    //Lista por un id especifico
    public function show($id)
{
    $departamentos = [
        ['id' => 1, 'nombre' => 'Ahuachapan'],
        ['id' => 2, 'nombre' => 'Santa Ana'],
        ['id' => 3, 'nombre' => 'San Salvador'],
        ['id' => 4, 'nombre' => 'La Paz'],
        ['id' => 5, 'nombre' => 'Cuscatlan'],
        ['id' => 6, 'nombre' => 'Morazan'],
        ['id' => 7, 'nombre' => 'La Union'],
        ['id' => 8, 'nombre' => 'Chalatenango'],
        ['id' => 9, 'nombre' => 'Sonsonate'],
        ['id' => 10, 'nombre' => 'La Libertad'],
        ['id' => 11, 'nombre' => 'Cabañas'],
        ['id' => 12, 'nombre' => 'San Miguel'],
        ['id' => 13, 'nombre' => 'San Vicente'],
        ['id' => 14, 'nombre' => 'Usulutan'],
    ];

    $departamentoEncontrado = null;

    foreach ($departamentos as $departamento) {
        if ($departamento['id'] == $id) {
            $departamentoEncontrado = $departamento;
            break;
        }
    }

    if ($departamentoEncontrado) {
        return response()->json($departamentoEncontrado);
    } else {
        return response()->json(['message' => 'Departamento no encontrado'], 404);
    }
}

}
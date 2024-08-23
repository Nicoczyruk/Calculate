<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromedioController extends Controller
{
    public function mostrarFormulario() {

        return view('promedio');
    }

    public function calcularPromedio(Request $request)
{
    $notas = $request->input('notas'); // Intento de arreglo de notas

    
    $notasValidas = array_filter($notas, fn($nota) => $nota !== null && $nota !== '');
    $promedio = count($notasValidas) > 0 ? array_sum($notasValidas) / count($notasValidas) : 0;

    return view('promedio')->with('promedio', $promedio);
}

}

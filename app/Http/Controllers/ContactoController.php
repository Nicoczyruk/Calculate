<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    private static $contactos = [];

    public function mostrarFormulario()
    {
        return view('contacto');
    }

    public function guardarContacto(Request $request)
    {
    global $contactos;
    if (!isset($contactos)) {
        $contactos = [];
    }

    $nombres = $request->input('nombre');
    $telefonos = $request->input('telefono');
    $direcciones = $request->input('direccion');

    for ($i = 0; $i < count($nombres); $i++) {
        if ($nombres[$i] && $telefonos[$i] && $direcciones[$i]) {
            $contactos[] = [
                'nombre' => $nombres[$i],
                'telefono' => $telefonos[$i],
                'direccion' => $direcciones[$i],
            ];
        }
    }

    return view('contacto-lista', ['contactos' => $contactos]);
    }

    public function mostrarLista()
    {
        
        return view('contacto-lista', ['contactos' => self::$contactos]);
    }
}

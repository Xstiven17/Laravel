<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function calcularPromedio(Request $request)
    {
        $nota1 = $request->input('nota1');
        $nota2 = $request->input('nota2');
        $nota3 = $request->input('nota3');

        $promedio = ($nota1 + $nota2 + $nota3) / 3;

        dd($promedio);

        return view('resultado', ['promedio' => $promedio]);
    }
}
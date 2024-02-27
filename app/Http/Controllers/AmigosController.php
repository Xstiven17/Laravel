<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmigosController extends Controller
{
    public function encontrarAmigos($num1, $num2)
    {
        dump("Número 1: $num1, Número 2: $num2");
        $resultadosAmigos = [];

        for ($i = 1; $i <= $limite; $i++) {
            $sumaDivisoresI = $this->sumaDivisores($i);

            if ($i < $sumaDivisoresI && $this->sumaDivisores($sumaDivisoresI) == $i) {
                for ($j = $i + 1; $j <= $limite; $j++) {
                    $sumaDivisoresJ = $this->sumaDivisores($j);

                    if ($j < $sumaDivisoresJ && $this->sumaDivisores($sumaDivisoresJ) == $j && $sumaDivisoresI == $j && $sumaDivisoresJ == $i) {
                        $resultadosAmigos[] = [
                            'numero1' => $i,
                            'numero2' => $j,
                            'mensaje' => "Los números $i y $j son amigos"
                        ];
                    }
                }
            }
        }

        return view('amigos.index', compact('resultadosAmigos'));
    }

    private function sumaDivisores($numero)
    {
        $suma = 0;

        for ($i = 1; $i <= $numero / 2; $i++) {
            if ($numero % $i == 0) {
                $suma += $i;
            }
        }

        return $suma;
    }
}

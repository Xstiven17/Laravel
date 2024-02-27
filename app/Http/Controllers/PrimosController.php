<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimosController extends Controller
{
    public function esprimo($number){
        $esprimo = true;
        if ($number < 2) {
            $esprimo = false;
        }
    
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $esprimo = false;
                break;
            }
        }
    
        if ($esprimo) {
            return response()->json(["message" => "El número $number es primo."]);
        } else {
            return response()->json(["message" => "El número $number no es primo."]);
        }
    }
}

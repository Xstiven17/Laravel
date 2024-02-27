<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function func1($num1,$num2) {
       
        return $num1+$num2 ;


    }
}

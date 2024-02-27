<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimosController;
use App\Http\Controllers\AmigosController;
use App\Http\Controllers\NotasController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/curso/{dato1}/{dato2}',[CursoController::class,'func1']);

Route::get('/numeros-primos/{numero}', [PrimosController::class, 'esprimo']);

Route::get('/numeros-amigos/{num1}/{num2}', [AmigosController::class, 'encontrarAmigos']);

Route::get('/formulario', function () {
    return view('formulario');
});

Route::post('/calcular-promedio', [NotasController::class, 'calcularPromedio']);
<?php

namespace App\http\Controllers;


class OperacoesController extends Controller{

    public function soma($valor1, $valor2)
    {
        $resultado = $valor1 + $valor2;
         return view('operacoes')
        ->with('valor1', $valor1)
        ->with('valor2', $valor2)
        ->with('resultado', $resultado)
         ;
    }

    public function subtracao($valor1, $valor2)
    {
        $resultado = $valor1 - $valor2;
         return view('operacoes')
        ->with('valor1', $valor1)
        ->with('valor2', $valor2)
        ->with('resultado', $resultado)
         ;
    }

    public function multiplicacao($valor1, $valor2)
    {
        $resultado = $valor1 * $valor2;
        return view('operacoes')
       ->with('valor1', $valor1)
       ->with('valor2', $valor2)
       ->with('resultado', $resultado)
        ;
    }

    public function divisao($valor1, $valor2)
    {
        if ($valor1 >0 && $valor2 >0)
        {
        $resultado = $valor1 / $valor2;
         return view('operacoes')
        ->with('valor1', $valor1)
        ->with('valor2', $valor2)
        ->with('resultado', $resultado)
         ;}
         else{
            echo "<h1>Não é possivel divisão por zero!</h1>";
         }
    }
};


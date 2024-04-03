<?php

//atividade1_a
namespace App\http\Controllers;

class nomeController extends Controller
{
    public function Mostrar($nome, $sobrenome = null)
    {
        return view('nome')
        ->with('nome', $nome)
        ->with('sobrenome', $sobrenome)
        ;
    }
};
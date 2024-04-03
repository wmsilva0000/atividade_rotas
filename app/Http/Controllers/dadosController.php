<?php

namespace App\http\Controllers;

use App\Models\Dados;

class dadosController extends Controller
{
    public function mostrarDados($nome, $sobrenome, $idade, $rm, $genero, $endereco){

        return view('dados')
        ->with('nome', $nome)
        ->with('sobrenome', $sobrenome)
        ->with('idade', $idade)
        ->with('rm', $rm)
        ->with('genero', $genero)
        ->with('endereco', $endereco)
        ;
  
    }
}
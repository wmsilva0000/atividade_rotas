<?php

namespace App\http\Controllers;

class tabelaController extends Controller
{
    public function buscarPorCategoria()
    {
        $produtos = [
            ['descricao' => 'Skala', 'categoria' => 'Creme de pentear', 'preco' => 25.00],
            ['descricao' => 'Boticário', 'categoria' => 'Perfume', 'preco' => 150.00],
            ['descricao' => 'Rexona', 'categoria' => 'Desodorante', 'preco' => 20.00],
            ['descricao' => 'Tressemé', 'categoria' => 'Shampoo', 'preco' => 35.00],
            ['descricao' => 'Risqué', 'categoria' => 'Esmalte', 'preco' => 4.99],
        ];

        return view('tabela')
-> with ('produtos', $produtos);
    }
}
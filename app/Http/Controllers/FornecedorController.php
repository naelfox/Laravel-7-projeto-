<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            [
                'nome' => 'Fornecedor 1',
                'endereco' => 'Rua Fornecedor 1, Cidade 1',
                'telefone' => '123-456-7890',
                'email' => 'fornecedor1@example.com'
            ],
            [
                'nome' => 'Fornecedor 2',
                'endereco' => 'Rua Fornecedor 2, Cidade 2',
                'telefone' => '987-654-3210',
                'email' => 'fornecedor2@example.com'
            ],
            [
                'nome' => 'Fornecedor 3',
                'endereco' => 'Rua Fornecedor 3, Cidade 3',
                'telefone' => '555-555-5555',
                'email' => 'fornecedor3@example.com'
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
        // return view('app.fornecedor.index');
    }
}

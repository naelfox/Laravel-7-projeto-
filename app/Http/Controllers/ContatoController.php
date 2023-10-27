<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    //

    public function contato(Request $request)
    {

        $motivo_contatos = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação',
        ];
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // dd($request);

        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // echo '<pre>';
        // print_r($request->input('mensagem'));
        // echo '</pre>';

        $contato = new SiteContato();

        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');

        // $contato->fill($request->all());
        // $contato->create($request->all());
        // $contato->save();



        // echo '<pre>';
        // print_r($contato->getAttributes());
        // echo '</pre>';

        return view('site.contato', [
            'titulo' => 'Contato (controller)',
            'motivo_contatos' => $motivo_contatos
        ]);
    }

    public function salvar(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required',
        ]);
        // SiteContato::create($request->all());
    }
}

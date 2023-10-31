<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    //

    public function contato(Request $request)
    {

        $motivo_contatos = MotivoContato::all();
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
        $request->validate(
            [
                'nome' => 'required|min:3|max:40|unique:site_contatos',
                'telefone' => 'required',
                'email' => 'email',
                'motivo_contatos_id' => 'required',
                'mensagem' => 'required',
            ],
            [

                'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
                'nome.max' => 'O campo nome precisa ter no máximo 40 caracteres',
                'nome.unique' => 'O nome informado já está em uso',
                'required' => 'O campo :attribute é obrigatório',
                'email' => 'Informe um e-mail válido'
            ]
        );
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}

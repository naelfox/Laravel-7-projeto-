@extends('app.layouts.basico')

@section('titulo', 'Editar detalhe')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Editar detalhe do produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="#">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <h4> Produto descricao </h4>
            <div>Nome: {{ $produto_detalhe->produto->nome }}</div>
            <br>
            <div>Descrição: {{ $produto_detalhe->produto->descricao }} </div>
            @component('app.produto_detalhe._components.form_create_edit', [
                'unidades' => $unidades,
                'produto_detalhe' => $produto_detalhe,
                'text' => 'Editar detalhe'
                ])
            @endcomponent

        </div>
    </div>

@endsection

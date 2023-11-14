@extends('app.layouts.basico')

@section('titulo', 'Detalhe do produto')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Adicionar Detalhes do Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href=" ">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">


            @component('app.produto_detalhe._components.form_create_edit', ['unidades' => $unidades, 'text' => 'Adicionar detalhes do produto'])
            @endcomponent
        </div>
    </div>

@endsection

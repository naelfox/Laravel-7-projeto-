@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Editar Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href=" ">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            @component('app.produto._components.form_create_edit', [
                'unidades' => $unidades,
                'produto' => $produto,
                'text' => 'Editar'
                ])
            @endcomponent

        </div>
    </div>

@endsection

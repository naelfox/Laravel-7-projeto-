@extends('app.layouts.basico')

@section('titulo', 'cliente')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Adicionar Cliente</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.index') }}">Voltar</a></li>
                <li><a href=" ">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">


            @component('app.cliente._components.form_create_edit', ['text' => 'Cadastrar'])
            @endcomponent
        </div>
    </div>

@endsection

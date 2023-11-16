@extends('app.layouts.basico')

@section('titulo', 'pedido')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Adicionar Pedido</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.index') }}">Voltar</a></li>
                <li><a href=" ">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">


            @component('app.pedido._components.form_create_edit', ['clientes' => $clientes, 'text' => 'Cadastrar'])
            @endcomponent
        </div>
    </div>

@endsection

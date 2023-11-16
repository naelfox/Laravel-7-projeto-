@extends('app.layouts.basico')

@section('titulo', 'Cliente')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Editar Cliente</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.index') }}">Voltar</a></li>
                <li><a href=" ">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            @component('app.cliente._components.form_create_edit', [
                'cliente' => $cliente,
                'text' => 'Editar',
                ])
            @endcomponent

        </div>
    </div>

@endsection

@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Fornecedor</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto">
                <form action="{{ route('app.fornecedor.listar') }}" method="post">
                    @csrf
                    <input type="text" name="nome" placeholder="Nome" id="borda-preta">
                    <input type="text" name="site" placeholder="Site" id="borda-preta">
                    <input type="text" name="uf" placeholder="UF" id="borda-preta">
                    <input type="text" name="email"  placeholder="E-mail" id="borda-preta">
                    <button type="submit" id="borda-preta">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Adicionar Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href=" ">Novo</a></li>
                <li><a href=" ">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            {{ $msg ?? '' }}
            <div style="width: 30%; margin-left: auto; margin-right: auto">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $fornecedor->id ?? '' }}">
                    <input type="text" name="nome" placeholder="Nome" value="{{ $fornecedor->nome ?? old('nome') }}" id="borda-preta">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                    <input type="text" name="site" placeholder="Site" value="{{ $fornecedor->site ?? old('site') }}" id="borda-preta">
                    {{ $errors->has('site') ? $errors->first('site') : '' }}

                    <input type="text" name="uf" placeholder="UF" value="{{  $fornecedor->uf ?? old('uf') }}" id="borda-preta">
                    {{ $errors->has('uf') ? $errors->first('uf') : '' }}

                    <input type="text" name="email" placeholder="E-mail" value="{{ $fornecedor->email ?? old('email') }}" id="borda-preta">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}

                    <button type="submit" id="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

@endsection

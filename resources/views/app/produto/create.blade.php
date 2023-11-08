@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Adicionar Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href=" ">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">

            <div style="width: 30%; margin-left: auto; margin-right: auto">
                <form action="{{ route('produto.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="">
                    <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}" id="borda-preta">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}


                    <input type="text" name="descricao" placeholder="Descrição" value="{{ old('descricao') }}" id="borda-preta">
                    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}

                    <input type="text" name="peso" placeholder="Peso" value="{{ old('peso') }}" id="borda-preta">
                    {{ $errors->has('peso') ? $errors->first('peso') : '' }}
                    {{-- @dd($unidade) --}}

                    {{-- {{ print_r($unidade) }} --}}

                    <select name="unidade_id">

                        @foreach ($unidades as $unidade)
                            <option selected disabled>Selecione a unidade de medida</option>
                            <option value="{{ $unidade->id }}" {{ old('unidade_id') == $unidade->id ? 'selected' : '' }} > {{ $unidade->descricao }}</option>
                        @endforeach
                        {{-- <option value="1">Unidade</option> --}}
                    </select>
                    {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}



                    <button type="submit" id="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

@endsection

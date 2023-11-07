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

            <div style="width: 30%; margin-left: auto; margin-right: auto">
                <form action="" method="post">
                    @csrf
                    <input type="hidden" name="id" value="">
                    <input type="text" name="nome" placeholder="Nome" value="" id="borda-preta">


                    <input type="text" name="descricao" placeholder="Descrição" value="" id="borda-preta">



                    <input type="text" name="peso" placeholder="Peso" value="" id="borda-preta">


                    <select name="" id="">
                        <option selected disabled>Selecione a unidade de medida</option>
                        <option value="1">Unidade</option>
                    </select>




                    <button type="submit" id="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

@endsection

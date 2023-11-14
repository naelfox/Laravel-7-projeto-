@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Listagem de produtos</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 100%; margin-left: auto; margin-right: auto;">
                <table border="1" style="margin-left: auto; margin-right: auto;">

                    <head>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Fornecedor</th>
                            <th>Peso</th>
                            <th>Unidade ID</th>
                            <th>Comprimento</th>
                            <th>Altura</th>
                            <th>Largura</th>
                        </tr>
                    </head>

                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td> {{ $produto->nome }} </td>
                                <td> {{ $produto->descricao }} </td>
                                <td> {{ $produto->fornecedor->nome }} </td>
                                <td> {{ $produto->peso }} </td>
                                <td> {{ $produto->unidade_id }} </td>
                                <td> {{ $produto->produtoDetalhe->comprimento ?? '-' }} </td>
                                <td> {{ $produto->produtoDetalhe->altura ?? '-' }} </td>
                                <td> {{ $produto->produtoDetalhe->largura ?? '-'  }} </td>
                                <td> <a href="{{ route('produto.show', ['produto' => $produto->id]) }}">Visualizar</a> </td>
                                <td>



                                    <form action="{{ route('produto.destroy', ['produto' => $produto->id ]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit">Excluir</button>
                                    </form>
                                <td> <a href=" {{ route('produto.edit', ['produto' => $produto->id] ) }} ">Editar</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $produtos->appends($request)->links() }}

                {{-- <br>
                Nùmero do primeiro registro da página {{ $produtos->firstItem() }}
                <br>
                Nùmero do último registro da página {{ $produtos->lastItem() }} --}}


                <br>
               Registros por página: {{ $produtos->count() }} Exibindo página {{ $produtos->currentPage() }} de {{ $produtos->lastPage() }} e Total de registros {{ $produtos->total() }}
            </div>
        </div>
    </div>

@endsection

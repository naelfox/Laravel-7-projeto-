@extends('app.layouts.basico')

@section('titulo', 'pedido')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Listagem de pedidos</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 100%; margin-left: auto; margin-right: auto;">
                <table border="1" style="margin-left: auto; margin-right: auto;">

                    <head>
                        <tr>
                            <th>Nome</th>
                        </tr>
                    </head>

                    <tbody>
                        @foreach ($pedidos as $pedido)
                            <tr>
                                <td> {{ $pedido->cliente->nome }} </td>

                                <td> <a href="{{ route('pedido.show', ['pedido' => $pedido->id]) }}">Visualizar</a> </td>
                                <td>
                                    <form action="{{ route('pedido.destroy', [$pedido->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Excluir</button>
                                    </form>
                                <td> <a href=" {{ route('pedido.edit', [$pedido->id]) }} ">Editar</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pedidos->appends($request)->links() }}



                <br>
                Registros por página: {{ $pedidos->count() }} Exibindo página {{ $pedidos->currentPage() }} de
                {{ $pedidos->lastPage() }} e Total de registros {{ $pedidos->total() }}
            </div>
        </div>
    </div>

@endsection

@extends('app.layouts.basico')

@section('titulo', 'cliente')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Listagem de clientes</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.create') }}">Novo</a></li>
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
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td> {{ $cliente->nome }} </td>

                                <td> <a href="{{ route('cliente.show', ['cliente' => $cliente->id]) }}">Visualizar</a> </td>
                                <td>
                                    <form action="{{ route('cliente.destroy', [$cliente->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Excluir</button>
                                    </form>
                                <td> <a href=" {{ route('cliente.edit', [$cliente->id]) }} ">Editar</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $clientes->appends($request)->links() }}

                {{-- <br>
                Nùmero do primeiro registro da página {{ $clientes->firstItem() }}
                <br>
                Nùmero do último registro da página {{ $clientes->lastItem() }} --}}


                <br>
                Registros por página: {{ $clientes->count() }} Exibindo página {{ $clientes->currentPage() }} de
                {{ $clientes->lastPage() }} e Total de registros {{ $clientes->total() }}
            </div>
        </div>
    </div>

@endsection

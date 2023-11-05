@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <p>Fornecedor - Listar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto">
                <table border="1" width="100%">

                    <head>
                        <tr>
                            <th>Nome</th>
                            <th>Site</th>
                            <th>UF</th>
                            <th>E-mail</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </head>

                    <tbody>
                        @foreach ($fornecedores as $fornecedor)
                            <tr>
                                <td> {{ $fornecedor->nome }} </td>
                                <td> {{ $fornecedor->site }} </td>
                                <td> {{ $fornecedor->uf }} </td>
                                <td> {{ $fornecedor->email }} </td>
                                <td>  <a href="{{ route('app.fornecedor.excluir', $fornecedor->id) }}">Excluir</a> </td>
                                <td> <a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}">Editar</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $fornecedores->appends($request)->links() }}

                {{-- <br>
                Nùmero do primeiro registro da página {{ $fornecedores->firstItem() }}
                <br>
                Nùmero do último registro da página {{ $fornecedores->lastItem() }} --}}


                <br>
               Registros por página: {{ $fornecedores->count() }} Exibindo página {{ $fornecedores->currentPage() }} de {{ $fornecedores->lastPage() }} e Total de registros {{ $fornecedores->total() }}
            </div>
        </div>
    </div>

@endsection

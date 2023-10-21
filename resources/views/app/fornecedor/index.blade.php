<h3>Fornecedor</h3>
{{-- Fica o comentário que será descartado --}}


@php

    echo 'Olá';

@endphp
<br>

@empty($fornecedores)
    array vazio
@endempty


{{-- @dd($fornecedores) --}}
@forelse ($fornecedores as $fornecedor)
    Iteração atual: {{ $loop->iteration }} <br>
    Primeira iteração: @if($loop->first)
                        Sim
                        @else
                        Não
                        @endif
    Fornecedor {{ $fornecedor['nome'] }} <br>
    Endereço {{ $fornecedor['endereco'] }} <br><br>
@empty
    Não existem fornecedores cadastrados
@endforelse



{{-- @empty($fornecedores[0]['cnpj'])
    Vazio
@endempty

@isset($fornecedores[0]['empresa'])
    <h2> {{ $fornecedores[0]['empresa'] }}</h2>
@endisset

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Satatus: {{ $fornecedores[0]['status'] }}
<br>
@if (!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif

@unless ($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless --}}



{{--
@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif
 --}}

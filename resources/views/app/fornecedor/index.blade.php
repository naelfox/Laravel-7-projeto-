<h3>Fornecedor</h3>
{{-- Fica o comentário que será descartado --}}


@php

echo "Olá";

@endphp

@dd($fornecedores)


@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif



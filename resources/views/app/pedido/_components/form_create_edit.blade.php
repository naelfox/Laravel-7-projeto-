{{-- @dd($pedido) --}}
<div style="width: 30%; margin-left: auto; margin-right: auto">
    <form action="{{ isset($pedido) ? route('pedido.update', $pedido->id) : route('pedido.store') }}" method="post">
        @csrf

        @if (isset($pedido))
            @method('PUT')
        @endif


        <select name="cliente_id">

            <option {{ !isset($pedido) ? 'selected' : '' }} disabled>Selecione a cliente de medida</option>
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}"
                    {{ ($pedido->cliente_id ?? old('cliente_id')) == $cliente->id ? 'selected' : '' }}>  {{ $cliente->nome }}</option>
            @endforeach
        </select>

        <button type="submit" id="borda-preta">{{ $text }}</button>
    </form>
</div>

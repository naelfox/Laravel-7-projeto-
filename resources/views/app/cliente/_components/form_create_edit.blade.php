{{-- @dd($cliente) --}}
<div style="width: 30%; margin-left: auto; margin-right: auto">
    <form action="{{ isset($cliente) ? route('cliente.update', $cliente->id) : route('cliente.store') }}" method="post">
        @csrf

        @if (isset($cliente))
            @method('PUT')
        @endif


        <input type="text" name="nome" placeholder="Nome"
            value="{{ isset($cliente->nome) && !$errors->has('nome') ? $cliente->nome : old('nome') }}" id="borda-preta">
        {{ $errors->has('nome') ? $errors->first('nome') : '' }}


        <button type="submit" id="borda-preta">{{ $text }}</button>
    </form>
</div>

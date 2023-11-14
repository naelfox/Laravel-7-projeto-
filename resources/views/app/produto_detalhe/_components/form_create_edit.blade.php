{{-- @dd($produto_detalhe) --}}
<div style="width: 30%; margin-left: auto; margin-right: auto">
    <form
        action="{{  isset($produto_detalhe) ? route('produto-detalhe.update', $produto_detalhe->id) : route('produto-detalhe.store') }}"
        method="post">
        @csrf

        @if (isset($produto_detalhe))
            @method('PUT')
        @endif

        <input type="text" name="produto_id" placeholder="ID do produto" value="{{ $produto_detalhe->id ??  old('produto_id') }}" id="borda-preta">

        <input type="text" name="comprimento" placeholder="Comprimento" value="{{ $produto_detalhe->comprimento ?? old('comprimento') }}" id="borda-preta">

        <input type="text" name="largura" placeholder="Largura" value="{{ $produto_detalhe->largura ?? old('largura') }}" id="borda-preta">

        <input type="text" name="altura" placeholder="Altura" value="{{ $produto_detalhe->altura ??  old('altura') }}" id="borda-preta">

        <select name="unidade_id">

            @foreach ($unidades as $unidade)
                <option selected disabled>Selecione a unidade de medida</option>
                <option value="{{ $unidade->id }}"
                    {{ ($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>
                    {{ $unidade->descricao }}</option>
            @endforeach
            {{-- <option value="1">Unidade</option> --}}
        </select>



        <button type="submit" id="borda-preta">{{ $text }}</button>
    </form>
</div>

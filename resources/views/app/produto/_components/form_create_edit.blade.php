{{-- @dd($produto) --}}
<div style="width: 30%; margin-left: auto; margin-right: auto">
    <form action="{{ isset($produto) ? route('produto.update', $produto->id) : route('produto.store') }}" method="post">
        @csrf

        @if (isset($produto))
            @method('PUT')
        @endif
        {{-- <input type="hidden" name="id" value=""> --}}

        <input type="text" name="nome" placeholder="Nome" value="{{ isset($produto->nome) && !$errors->has('nome') ? '$produto->nome' : old('nome') }}" id="borda-preta">
        {{ $errors->has('nome') ? $errors->first('nome') : '' }}


        <input type="text" name="descricao" placeholder="Descrição"
            value="{{ $produto->descricao ?? old('descricao') }}" id="borda-preta">
        {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}

        <input type="text" name="peso" placeholder="Peso" value="{{ $produto->peso ?? old('peso') }}"
            id="borda-preta">
        {{ $errors->has('peso') ? $errors->first('peso') : '' }}
        {{-- @dd($unidade) --}}

        {{-- {{ print_r($unidade) }} --}}

        <select name="unidade_id">

            @foreach ($unidades as $unidade)
                <option selected disabled>Selecione a unidade de medida</option>
                <option value="{{ $unidade->id }}"
                    {{ ($produto->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>
                    {{ $unidade->descricao }}</option>
            @endforeach
            {{-- <option value="1">Unidade</option> --}}
        </select>
        {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}



        <button type="submit" id="borda-preta">{{ $text }}</button>
    </form>
</div>

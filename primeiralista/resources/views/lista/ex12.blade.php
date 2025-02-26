@extends('layout')

@section('conteudo')


<form method="post" action="listaex12">
    @csrf
    <div class="mb-3">
        <label for="preco" class="form-label">Insira o preço:</label>
        <input type="number" id="preco" name="preco" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="percentual" class="form-label">Insira o percentual de desconto:</label>
        <input type="number" id="percentual" name="percentual" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>



@isset($precoDesconto)

<p>Preço com desconto: {{$precoDesconto}} </p>

@endisset


@endsection
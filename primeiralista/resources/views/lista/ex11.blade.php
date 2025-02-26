@extends('layout')

@section('conteudo')


<form method="post" action="listaex11">
    @csrf
    <div class="mb-3">
        <label for="peso" class="form-label">Insira seu peso (em Kg):</label>
        <input type="number" id="peso" name="peso" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Insira sua altura (em metros):</label>
        <input type="number" id="altura" name="altura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>


@isset($imc)

<p>{{$imc}} IMC</p>

@endisset


@endsection
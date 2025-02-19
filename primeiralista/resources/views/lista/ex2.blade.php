@extends('layout')

@section('conteudo')


<form method="post" action="listaex2">
    @csrf
    <div class="mb-3">
        <label for="celsius" class="form-label">Insira uma temperatura em Celsius </label>
        <input type="number" id="celsius" name="celsius" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>


@isset($fahrenheit)
<p>Em Fahrenheit é {{$fahrenheit}}</p>
@endisset


@endsection
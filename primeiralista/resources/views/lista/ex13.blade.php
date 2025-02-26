@extends('layout')

@section('conteudo')



<form method="post" action="listaex13">
    @csrf
    <div class="mb-3">
        <label for="capital" class="form-label">Insira o valor do Capital:</label>
        <input type="number" id="capital" name="capital" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="taxa" class="form-label">Insira o valor do da taxa de juros:</label>
        <input type="number" id="taxa" name="taxa" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="periodo" class="form-label">Insira o valor do período: </label>
        <input type="number" id="periodo" name="periodo" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>




@isset($jurosSimples)

<p>Juros simples: {{$jurosSimples}} </p>

@endisset


@endsection
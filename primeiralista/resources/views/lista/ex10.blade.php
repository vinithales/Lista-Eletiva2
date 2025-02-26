@extends('layout')

@section('conteudo')

<form method="post" action="listaex10">
    @csrf
    <div class="mb-3">
        <label for="quilometros" class="form-label">Insira um valor em Quilômetros</label>
        <input type="number" id="quilometros" name="quilometros" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>


@isset($milhas)

<p>{{$milhas}} Milhas</p>

@endisset


@endsection
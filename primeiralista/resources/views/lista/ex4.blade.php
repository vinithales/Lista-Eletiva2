@extends('layout')

@section('conteudo')



<form method="post" action="listaex4">
    @csrf
    <div class="mb-3">
        <label for="largura" class="form-label">Insira a largura de um retângulo </label>
        <input type="text" id="largura" name="largura" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Insira a Altura de um retângulo </label>
        <input type="text" id="altura" name="altura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>



@isset($area)
<p>A área do retângulo é {{$area}}</p>
@endisset


@endsection
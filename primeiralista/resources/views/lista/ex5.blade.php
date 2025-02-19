@extends('layout')

@section('conteudo')



<form method="post" action="listaex5">
    @csrf
    <div class="mb-3">
        <label for="area" class="form-label">Insira a área do circulo</label>
        <input type="number" id="area" name="area" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>




@isset($area)
<p>A área do circulo é {{$area}}</p>
@endisset


@endsection
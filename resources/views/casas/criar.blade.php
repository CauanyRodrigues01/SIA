@extends('layouts.main')

@section('title', 'Criar Casa')

@section('content')

<div class="col-md-6 offset-md-3">
    <form method="post" action="/Imoveis/Casa">
        @csrf
        <h1 class="text-center">Casa</h1>
        <div>
            <div>
                <label for="area_construida">Área construída:</label>
                <input type="text" class="form-control" name="area_construida" id="area_construida">
            </div>
            <div>
                <label for="area_terreno">Área do terreno:</label>
                <input type="text" class="form-control" name="area_terreno" id="area_terreno">
            </div>
            <input type="hidden" name="imovel_id" value="{{$imovel_id}}">
            <button type="submit" style="background: #F9E373" class="w-100 btn btn-lg btn-warning" name="enviar">Enviar</button>
        </div>
    </form>
</div>

@endsection

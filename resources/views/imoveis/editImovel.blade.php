@extends('layouts.main')

@section('title', 'Editar')

@section('content')
<div class="col-md-6 offset-md-3">

    <form method="POST" action="/Imoveis/Update/{{ $imovel->id }}" name="edit" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1 class="text-center">Editando</h1>
        <div>
            <div>
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" value="{{ $imovel->endereco }}" class="form-control">
            </div>
            <div>
                <label for="image">Fotos:</label>
                <input type="file" id="image" name="image" class="form-control-file">
                <img src="/img/imoveis/{{$imovel->image}}" alt="" class="img-preview">
            </div>
            <div>
                <label for="valor">Valor (R$):</label>
                <input type="number" class="form-control" id="valor" name="valor" value="{{ $imovel->valor }}">
            </div>
            <div id="container-tipos">
                <label for="tipos">Qual é o tipo do imóvel?</label>
                <select name="tipo" id="tipos" class="form-control">
                    <option value="Apartamento">Apartamento</option>
                    <option value="Casa">Casa</option>
                    <option value="Terreno">Terreno</option>
                    <option value="Fazenda" >Fazenda</option>
                </select>
            </div>
            <div>
                <label for="tipo_anuncio">Qual é o tipo de anúcio?</label>
                <select name="tipo_anuncio" id="tipo_anuncio" class="form-control">
                    <option value="Venda-se">Venda-se</option>
                    <option value="Aluga-se">Aluga-se</option>
                </select>
            </div>
            <input type="submit" class="w-100 btn btn-lg btn-warning" style="background: #F9E373" value="Editar imovel">
        </div>
      </form>
</div>
@endsection

@extends('layouts.main')

@section('title', 'Criar Imóvel')

@section('content')

<div class="col-md-6 offset-md-3">

    <form method="post" action="/Imoveis" enctype="multipart/form-data">
        @csrf
        <h1 class="text-center">Adicionar um imóvel</h1>
        <div>
            <div>
                <label for="anunciante">Anunciante:</label>
                <input type="text" name="anunciante" id="anunciante" class="form-control">
            </div>
            <div>
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" class="form-control">
            </div>
            <div>
                <label for="image">Fotos:</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div>
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" id="valor" name="valor">
            </div>
            <div id="container-tipos">
                <label for="tipos">Qual é o tipo do imóvel?</label>
                <select name="tipo" id="tipos" class="form-control">
                    <option value="apartamento">Apartamento</option>
                    <option value="casa">Casa</option>
                    <option value="terreno">Terreno</option>
                    <option value="fazenda" >Fazenda</option>
                </select>
            </div>
            <div>
                <label for="tipo_anuncio">Qual é o tipo de anúcio?</label>
                <select name="tipo_anuncio" id="tipo_anuncio" class="form-control">
                    <option value="Venda">Venda</option>
                    <option value="Aluguel">Aluguel</option>
                </select>
            </div>
            <button type="submit" style="background: #F9E373" class="w-100 btn btn-lg btn-warning" name="enviar">Próximo</button>
        </div>
      </form>
</div>

@endsection

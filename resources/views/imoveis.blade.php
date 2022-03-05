@extends('layouts.main')

@section('title', 'Imoveis')

@section('content')

<div id="imoveis-container" class="col-md-12">
    <h2>Imóveis disponíveis</h2>
    <p class="subtitle">Veja o lar que mais combina com você e com sua conta bancária!</p>
    <div id="cards-container" class="row">
        @foreach($imoveis as $imovel)
        <div class="card col-md-3">
            <img src="/img/imoveis/{{ $imovel->image }}">
            <div class="card-bory">
                <h5>{{ $imovel->tipo_anuncio }}</h5>
                <p>Anunciado por <span>{{ $imovel->anunciante }}</span> </p>
                <p>Localizado em <span>{{ $imovel->endereco }}</span></p>
                <p>Valor = <span>{{ $imovel->valor }}R$</span></p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

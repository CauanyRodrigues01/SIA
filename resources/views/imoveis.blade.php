@extends('layouts.main')

@section('title', 'Imoveis')

@section('content')

<div id="imoveis-container" class="col-md-12">
    <h2>Imóveis disponíveis</h2>
    <p class="subtitle">Veja o lar que mais combina com você e com sua conta bancária!</p>
    <div id="cards-container" class="row">
        @foreach($imoveis as $imovel)
        <div class="card col-md-3">
            <div class="card-bory">
                <p>Anunciante:</p>
                <h5>{{ $imovel->anunciante }}</h5>
                <p>Endereço:</p>
                <h5>{{ $imovel->endereco }}</h5>
                <p>Valor:</p>
                <h5>{{ $imovel->valor }}</h5>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

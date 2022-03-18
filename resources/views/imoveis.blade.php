@extends('layouts.main')

@section('title', 'Imoveis')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">
        <h2>Imóveis disponíveis</h2>
        <p class="subtitle">Veja o lar que mais combina com você e com sua conta bancária!</p>
      <div class="row">
        @if(count($imoveis) > 0)
            @foreach($imoveis as $imovel)
                <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="/img/imoveis/{{ $imovel->image }}" data-holder-rendered="true">
                    <div class="card-body">
                        <h5>{{ $imovel->tipo_anuncio }}</h5>
                        <p>Localizado na <span>{{ $imovel->endereco }}</span></p>
                        <p>Valor = R$ <span>{{ $imovel->valor }}</span></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/Imoveis/{{ $imovel->id }}" class="btn btn-sm btn-outline-secondary">Saber mais</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach
        @else
            <p>Ainda não há imóveis, <a href="/Imoveis/Criar">Criar imóvel</a></p>

        @endif
      </div>
    </div>
  </div>
@endsection

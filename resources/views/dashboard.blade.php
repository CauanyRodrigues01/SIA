@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Imóveis</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-imoveis-container">
    @if(count($imoveis) > 0)

    @else
        <p>Você ainda não temm eventos, <a href="/Imoveis/Criar">Criar evento</a></p>
    @endif
</div>

@endsection

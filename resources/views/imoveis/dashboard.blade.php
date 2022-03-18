@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Imóveis</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-imoveis-container">
    @if(count($imoveis) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Tipo de anuncio</th>
                    <th scope="col">Tipo de imóvel</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                @foreach($imoveis as $imovel)
                    <tr>
                        <th scropt="row">{{ $loop->index + 1 }}<a href="/Imoveis/{{ $imovel->id }}"> Imóvel</a></th>
                        <td>{{ $imovel->tipo_anuncio }}</td>
                        <td>{{ $imovel->tipo }}</td>
                        <td>{{ $imovel->valor }}</td>
                        <td class="btn-editar-deletar">
                            <a href="/Imoveis/Edit/{{$imovel->id}}" class="btn btn-info edit-btn">Editar</a>
                            <form action="/Imoveis/{{ $imovel->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                            </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Você ainda não tem imóveis, <a href="/Imoveis/Criar">Criar imóvel</a></p>
    @endif
</div>

@endsection

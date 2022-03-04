@extends('layouts.main')

@section('title', 'Criar Apartamento')

@section('content')

<div class="col-md-6 offset-md-3">

    <form method="post" action="/Imoveis/Apartamento">
        @csrf
        <h1 class="text-center">Apartamento</h1>
        <h1>{{ id }}</h1>
        <div>
            <div>
                <label for="andar">Andar:</label>
                <input type="number" class="form-control" name="andar" id="andar">
            </div>
            <div>
                <label for="nome_do_predio">Nome do prédio:</label>
                <input type="text" class="form-control" id="nome_do_predio" name="nome_do_predio">
            </div>
            <div>
                <label for="predio_descricao" >Caracteristicas do prédio</label>
                <textarea name="predio_descricao" class="form-control" id="predio_descricao" cols="40" rows="2"></textarea>
            </div>
            <button type="submit" style="background: #F9E373" class="w-100 btn btn-lg btn-warning" name="enviar">Enviar</button>
        </div>

        <div id="button-enviar">
            <!--<button type="submit" style="background: #F9E373" class="w-100 btn btn-lg btn-warning" name="enviar">Enviar</button>-->
        </div>
      </form>
</div>

@endsection

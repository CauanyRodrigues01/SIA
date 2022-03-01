@extends('layouts.main')

@section('title', 'Criar corretor')

@section('content')

<div class="col-md-6 offset-md-3">

    <form>
        <h1 class="text-center">Adicionar um corretor</h1>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" class="form-control" aria-label="First name">
            </div>
            <div class="col">
                <label for="Sobrenome" class="form-label">Sobrenome</label>
                <input type="text" id="nome" class="form-control" aria-label="First name">
            </div>
        </div>
        <div class="">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="">
            <label for="numero">Número de telefone</label>
            <input type="number" class="form-control" id="numero">
        </div>
        <div class="">
            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensage" rows="5" cols="33" class="form-control"></textarea>
        </div>

        <button type="submit" style="background: #F9E373" class="w-100 btn btn-lg btn-warning">Enviar</button>
      </form>
</div>

@endsection

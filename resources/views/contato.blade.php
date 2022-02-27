@extends('layouts.main')

@section('title', 'Contato')

@section('content')



<div class="container ">
    <div class="row justify-content-center align-items-center vh-90 mb-5 mt-5">
    <div class="lead text-center">
        <h3 class=" p-lg-5 text-success">Para mais informações sobre nossos serviços, entre e contato com nossos consultores especializados.</h3>
        <p class="">Estamos sempre ansiosos para ouvir de você!</p>
    </div>
        <div class="login col-auto bg-light">

            <form>
                <h1 class="mb-3 text-center">Contato</h1>
                <div class="mb-3 row">
                    <div class="col">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" id="nome" class="form-control" aria-label="First name">
                    </div>
                    <div class="col">
                        <label for="Sobrenome" class="form-label">Sobrenome</label>
                        <input type="text" id="nome" class="form-control" aria-label="First name">
                    </div>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="numero">Número de telefone</label>
                    <input type="number" class="form-control" id="numero">
                </div>
                <div class="mb-3">
                    <label for="mensagem">Mensagem</label>
                    <textarea id="mensagem" name="mensage" rows="5" cols="33" class="form-control"></textarea>
                </div>

                <button type="submit" style="background: #F9E373" class="w-100 btn btn-lg btn-warning">Enviar</button>
              </form>
        </div>
    </div>
</div>
@endsection

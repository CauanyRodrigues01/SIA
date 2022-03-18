@extends('layouts.main')

@section('title', 'Criar Terreno')

@section('content')

<div class="col-md-6 offset-md-3">
    <form method="post" action="/Imoveis/Terreno">
        @csrf
        <h1 class="text-center">Terreno</h1>
        <div>
            <div>
                <label for="frente">Frente:</label>
                <input type="text" name="frente" id="frente" class="form-control">
            </div>
            <div>
                <label for="lado">Lado:</label>
                <input type="text" name="lado" id="lado" class="form-control">
            </div>
            <div>
                <label for="agua">Possui água?</label>
                <select name="agua" id="agua" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div>
                <label for="luz">Possui luz?</label>
                <select name="luz" id="luz" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <input type="hidden" name="imovel_id" value="{{$imovel_id}}">
            <button type="submit" style="background: #F9E373" class="w-100 btn btn-lg btn-warning" name="enviar">Enviar</button>
        </div>
    </form>
</div>

@endsection

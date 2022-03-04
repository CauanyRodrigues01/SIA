@extends('layouts.main')

@section('title', 'Criar Fazenda')

@section('content')

<div class="col-md-6 offset-md-3">
    <form method="post" action="/Imoveis/Fazenda">
        @csrf
        <h1 class="text-center">Fazenda</h1>
        <div>
            <div>
                <label for="possui_casa">Possui casa?</label>
                <select name="possui_casa" id="possui_casa" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div>
                <label for="possui_plantacao">Possui plantação?</label>
                <select name="possui_plantacao" id="possui_plantacao" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div>
                <label for="possui_animais">Possui animais?</label>
                <select name="possui_animais" id="possui_animais" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <button type="submit" style="background: #F9E373" class="w-100 btn btn-lg btn-warning" name="enviar">Enviar</button>
        </div>
    </form>
</div>

@endsection

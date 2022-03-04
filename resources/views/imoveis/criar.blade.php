@extends('layouts.main')

@section('title', 'Criar Imóvel')

@section('content')

<div class="col-md-6 offset-md-3">

    <form method="post" action="/Imoveis">
        @csrf
        <h1 class="text-center">Adicionar um imóvel</h1>
        <div>
            <div>
                <label for="anunciante">Anunciante:</label>
                <input type="text" name="anunciante" id="anunciante" class="form-control">
            </div>
            <div>
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" class="form-control">
            </div>
            <div>
                <label for="fotos">Fotos:</label>
                <input type="text" id="fotos" name="fotos" class="form-control">
            </div>
            <div>
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" id="valor" name="valor">
            </div>
            <div id="container-tipos">
                <label for="tipos">Qual é o tipo do imóvel?</label>
                <select name="tipo" id="tipos" class="form-control">
                    <option value="apartamento">Apartamento</option>
                    <option value="casa">Casa</option>
                    <option value="terreno">Terreno</option>
                    <option value="fazenda" >Fazenda</option>
                </select>
            </div>
            <button type="submit" style="background: #F9E373" class="w-100 btn btn-lg btn-warning" name="enviar">Próximo</button>
        </div>
        <div id="form-parte-2">
            <!--<div id="form-apartamento">
                <div>
                    <label for="andar">Andar:</label>
                    <input type="number" name="andar" id="andar">
                </div>
                <div>
                    <label for="nome">Nome do prédio:</label>
                    <input type="text" id="nome" name="nome">
                </div>
                <div>
                    <label for="caracteristica">Caracteristicas do prédio</label>
                    <textarea name="caracteristica" id="caracteristica" cols="40" rows="2"></textarea>
                </div>
            </div>
            <div id="form-casa">
                <div>
                    <label for="area-construida">Área construída:</label>
                    <input type="text" name="area-construida" id="area-construida">
                </div>
                <div>
                    <label for="area-terreno">Área do terreno:</label>
                    <input type="text" name="area-terreno" id="area-terreno">
                </div>
            </div>
            <div id="form-terreno">
                <div>
                    <label for="frente">Frente:</label>
                    <input type="text" name="frente" id="frente">
                </div>
                <div>
                    <label for="lado">Lado:</label>
                    <input type="text" name="lado" id="lado">
                </div>
                <div>
                    <label for="agua">Possui água?</label>
                    <input type="number" id="agua" name="agua">
                </div>
                <div>
                    <label for="luz">Possui luz?</label>
                    <input type="number" name="luz" id="luz">
                </div>
            </div>
            <div id="form-fazenda">
                SE FOR Fazenda
                <div>
                    <label for="possui-casa">Possui casa?</label>
                    <input type="number" name="possui-casa" id="possui-casa">
                </div>
                <div>
                    <label for="possui-plantacao">Possui plantação?</label>
                    <input type="number" name="possui-plantacao" id="possui-plantacao">
                </div>
                <div>
                    <label for="possui-animais">Possui animais?</label>
                    <input type="number" name="possui-animais" id="possui-animais">
                </div>
            </div>-->
        </div>

        <div id="button-enviar">
            <!--<button type="submit" style="background: #F9E373" class="w-100 btn btn-lg btn-warning" name="enviar">Enviar</button>-->
        </div>
      </form>
</div>

@endsection

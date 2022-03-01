@extends('layouts.main')

@section('title', 'Criar Imóvel')

@section('content')

<div class="col-md-6 offset-md-3">

    <form>
        <h1 class="text-center">Adicionar um imóvel</h1>
        <div>
            <p>Qual é o tipo do imóvel?</p>
            <div>
                <input type="radio" id="apartamento" name="tipo" value="apartamento">
                <label for="apartamento">apartamento</label>
                <?php

                    if(isset($_POST['enviar'])) {
                        $tipo = $_POST['tipo'];
                        if($tipo == 'apartamento') {
                            echo "ola";
                        }
                    }

                ?>
            </div>
            <div>
                <input type="radio" id="casa" name="tipo" value="casa">
                <label for="casa">casa</label>
            </div>
            <div>
                <input type="radio" id="terreno" name="tipo" value="terreno">
                <label for="terreno">terreno</label>
            </div>
            <div>
                <input type="radio" id="fazenda" name="tipo" value="fazenda">
                <label for="fazenda">fazenda</label>
            </div>

        </div>

        <button type="submit" style="background: #F9E373" class="w-100 btn btn-lg btn-warning" name="enviar">Enviar</button>
      </form>
</div>

<!--
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

    <?php
        if($_FILES) {
            print_r($_FILES['arquivo']);
        }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="form1" enctype="multipart/form-data">
        <button id="add">Add</button>
        <button id="remove">Remove</button>
        <input type="submit" value="Enviar dados">
</form>

<script>
 $(document).ready(function(){

    $("#add").click(function(e){
        e.preventDefault();
        $("form").append('<input type="file" name="arquivo[]" value="Arquivo 2">');
    });

    $("#remove").click(function(e){
        e.preventDefault();
        $("form input[type='file']:last").remove();
    });

 })
</script>
-->

@endsection

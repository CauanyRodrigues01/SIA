//var novoparagrafo = document.createElement('p');

//var texto = document.createTextNode('este é o contrueod odo');

//novoparagrafo.appendChild(texto);

var tipos = document.querySelector("#tipos");

var valorselecionado = tipos.value;

function checaValor(){

    var valorselecionado = tipos.value;
    if(valorselecionado == "apartamento") {
        formApartamento();
    } else if (valorselecionado == "casa") {
        formCasa();
    } else if (valorselecionado == "terreno") {
        formTerreno();
    } else if (valorselecionado == "fazenda") {
        formFazenda();
    }

    document.querySelector("#button-enviar").innerHTML = "<button type='submit' style='background: #F9E373' class='w-100 btn btn-lg btn-warning' name='enviar'>Enviar</button>";

}

function formApartamento() {

    var formApartamento = "<div id='form-apartamento'><div><label for='andar'>Andar:</label><input type='number' name='andar' id='andar'></div><div><label for='nome'>Nome do prédio:</label><input type='text' id='nome' name='nome'></div><div><label for='caracteristica'>Caracteristicas do prédio</label><textarea name='caracteristica' id='caracteristica' cols='40' rows='2'></textarea></div></div>";

    var formParte2 = document.querySelector("#form-parte-2");

    formParte2.innerHTML = formApartamento;

}

function formCasa() {

    var formCasa = "<div id='form-casa'><div><label for='area-construida'>Área construída:</label><input type='text' name='area-construida' id='area-construida'></div><div><label for='area-terreno'>Área do terreno:</label><input type='text' name='area-terreno' id='area-terreno'></div></div>";

    var formParte2 = document.querySelector("#form-parte-2");

    formParte2.innerHTML = formCasa;
}

function formTerreno() {

    var formTerreno = "<div id='form-terreno'><div><label for='frente'>Frente:</label><input type='text' name='frente' id='frente'></div><div><label for='lado'>Lado:</label><input type='text' name='lado' id='lado'></div><div><label for='agua'>Possui água?</label><input type='number' id='agua' name='agua'></div><div><label for='luz'>Possui luz?</label><input type='number' name='luz' id='luz'></div></div>";

    var formParte2 = document.querySelector("#form-parte-2");

    formParte2.innerHTML = formTerreno;
}

function formFazenda() {

    var formTerreno = "<div id='form-fazenda'><div><label for='possui-casa'>Possui casa?</label><input type='number' name='possui-casa' id='possui-casa'></div><div><label for='possui-plantacao'>Possui plantação?</label><input type='number' name='possui-plantacao' id='possui-plantacao'></div><div><label for='possui-animais'>Possui animais?</label><input type='number' name='possui-animais' id='possui-animais'></div>";

    var formParte2 = document.querySelector("#form-parte-2");

    formParte2.innerHTML = formTerreno;
}

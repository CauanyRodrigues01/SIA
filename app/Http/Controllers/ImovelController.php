<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImovelController extends Controller
{
    public function index() {

        return view('welcome');

    }

    public function quemSomos() {

        return view('quemSomos');

    }

    public function corretores() {

        return view('corretores');

    }

    public function contato() {

        return view('contato');

    }

    public function criarCorretor() {

        return view('corretores/criar');

    }

    public function criarImovel() {

        return view('imoveis/criar');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imoveis;
use App\Models\Apartamentos;
use App\Models\Casas;
use App\Models\Terrenos;
use App\Models\Fazendas;

class ImoveisController extends Controller
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

    public function imoveis() {

        $imoveis = Imoveis::All();

        return view('imoveis', ['imoveis' =>$imoveis]);

    }

    public function criarImovel() {

        return view('imoveis/criar');

    }

    public function salvarImovel(Request $request) {

        $imovel = new Imoveis;

        $imovel->anunciante = $request->anunciante;
        $imovel->tipo_anuncio = $request->tipo_anuncio;
        $imovel->endereco = $request->endereco;
        $imovel->valor = $request->valor;
        $imovel->tipo = $request->tipo;

        //Image upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

            $requestImage->move(public_path('img/imoveis'), $imageName);

            $imovel->image = $imageName;

        }

        $imovel->Save();

        if ($request->tipo == 'apartamento') {
            return redirect('/Imoveis/Criar/Apartamento');
        } else if ($request->tipo == 'casa') {
            return redirect('/Imoveis/Criar/Casa');
        } else if ($request->tipo == 'terreno') {
            return redirect('/Imoveis/Criar/Terreno');
        } else if ($request->tipo == 'fazenda') {
            return redirect('/Imoveis/Criar/Fazenda');
        }


    }

    public function criarImovelApartamento() {

        return view('imoveis/criarApartamento');

    }

    public function salvarApartamento(Request $request) {

        $apartamento = new Apartamentos;

        $apartamento->andar = $request->andar;
        $apartamento->nome_do_predio = $request->nome_do_predio;
        $apartamento->predio_descricao = $request->predio_descricao;

        $apartamento->Save();

        return redirect('/Imoveis');

    }

    public function criarImovelCasa() {

        return view('imoveis/criarCasa');

    }

    public function salvarCasa(Request $request) {

        $casa = new Casas;

        $casa->area_construida = $request->area_construida;
        $casa->area_terreno = $request->area_terreno;

        $casa->Save();

        return redirect('/Imoveis');

    }

    public function criarImovelTerreno() {

        return view('imoveis/criarTerreno');

    }

    public function salvarTerreno(Request $request) {

        $terreno = new Terrenos;

        $terreno->frente = $request->frente;
        $terreno->lado = $request->lado;
        $terreno->agua = $request->agua;
        $terreno->luz = $request->luz;

        $terreno->Save();

        return redirect('/Imoveis');

    }

    public function criarImovelFazenda() {

        return view('imoveis/criarFazenda');

    }

    public function salvarFazenda(Request $request) {

        $fazenda = new Fazendas;

        $fazenda->possui_casa = $request->possui_casa;
        $fazenda->possui_plantacao = $request->possui_plantacao;
        $fazenda->possui_animais = $request->possui_animais;

        $fazenda->Save();

        return redirect('/Imoveis');

    }
}

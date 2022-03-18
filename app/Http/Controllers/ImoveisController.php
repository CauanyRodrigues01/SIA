<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imoveis;
use App\Models\Apartamentos;
use App\Models\Casas;
use App\Models\Terrenos;
use App\Models\Fazendas;
use App\Models\User;

class ImoveisController extends Controller
{
    public function index() {

        return view('welcome');

    }

    public function quemSomos() {

        return view('quemSomos');

    }

    public function corretores() {

        $users = User::All();

        return view('corretores', ['users' => $users]);

    }
    
    public function imoveis() {

        $imoveis = Imoveis::All();

        return view('imoveis', ['imoveis' => $imoveis]);

    }

    public function criarImovel() {

        return view('imoveis/criarImovel');

    }

    public function salvarImovel(Request $request) {

        $imovel = new Imoveis;

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

        $user = auth()->user();
        $imovel->user_id = $user->id;
        $imovel->anunciante_id = $user->id;

        $imovel->Save();

        if ($request->tipo == 'Apartamento') {
            return view('imoveis.criarApartamento', ['imovel_id' => $imovel->id]);
        } else if ($request->tipo == 'Casa') {
            return view('imoveis.criarCasa', ['imovel_id' => $imovel->id]);
        } else if ($request->tipo == 'Terreno') {
            return view('imoveis.criarTerreno', ['imovel_id' => $imovel->id]);
        } else if ($request->tipo == 'Fazenda') {
            return view('imoveis.criarFazenda', ['imovel_id' => $imovel->id]);
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

        $apartamento->imovel_id = $request->imovel_id;

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

        $casa->imovel_id = $request->imovel_id;

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

        $terreno->imovel_id = $request->imovel_id;

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

        $fazenda->imovel_id = $request->imovel_id;

        $fazenda->Save();

        return redirect('/Imoveis');

    }

    public function showImovel($id) {

        $imovel = Imoveis::findOrFail($id);

        $imovelOwner = User::Where('id', $imovel->anunciante_id)->first()->toArray();

        return view('imoveis.show', ['imovel' => $imovel, 'imovelOwner' => $imovelOwner]);

    }

    public function dashboard() {

            $user = auth()->user();

            $imoveis = $user->imoveis;

            return view('imoveis.dashboard', ['imoveis' => $imoveis]);

    }

    public function destroyImovel($id) {

        Imoveis::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Imovel excluído com sucesso');

    }

    public function editImovel($id) {

        $imovel = Imoveis::findOrFail($id);

        return view('imoveis.editImovel', ['imovel' => $imovel]);

    }

    public function updateImovel(Request $request) {

        $data = $request->all();

        //Image upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

            $requestImage->move(public_path('img/imoveis'), $imageName);

            $data['image'] = $imageName;

        }

        Imoveis::findOrFail($request->id)->update($data);

        $imovel = Imoveis::findOrFail($request->id);

        if ($request->tipo == 'Apartamento') {
            return view('imoveis.criarApartamento', ['imovel_id' => $imovel->id]);
        } else if ($request->tipo == 'Casa') {
            return view('imoveis.criarCasa', ['imovel_id' => $imovel->id]);
        } else if ($request->tipo == 'Terreno') {
            return view('imoveis.criarTerreno', ['imovel_id' => $imovel->id]);
        } else if ($request->tipo == 'Fazenda') {
            return view('imoveis.criarFazenda', ['imovel_id' => $imovel->id]);
        }

        return redirect('/dashboard')->with('msg', 'Imovel editado com sucesso');
    }

}

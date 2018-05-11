<?php

namespace aquiMarceneiro\Http\Controllers;

use Illuminate\Support\Facades\Request;
use aquiMarceneiro\Marceneiro;

class MarceneiroController extends Controller
{
    public function cadastrarMarceneiro(){
    	$marceneiro = new Marceneiro();

    	$marceneiro->name = Request::input('nome');
    	$marceneiro->cpf_cnpj = Request::input('cpf_cnpj');
    	$marceneiro->password = Request::input('senha');
    	$marceneiro->email = Request::input('email');
    	$marceneiro->uf = Request::input('uf');
    	$marceneiro->cidade = Request::input('cidade');
    	$marceneiro->cep = Request::input('cep');
        $marceneiro->descricao = Request::input('descricao');
        $marceneiro->especialidade = Request::input('especialidade');
        $marceneiro->tipo = Request::input('tipo');

    	$retorno = $marceneiro->save();

        return view('home');

    }
}

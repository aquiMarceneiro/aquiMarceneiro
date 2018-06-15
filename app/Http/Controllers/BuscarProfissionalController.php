<?php

namespace aquiMarceneiro\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use aquiMarceneiro\User;



class BuscarProfissionalController extends Controller{
    //
    public function consultaDefault(){

    	$resposta = DB::select('select * from users WHERE tipo = 2');

    	if (!empty($resposta)){
    		# code...
    		return view('consulta.buscarProfissional')->with('profissional', $resposta);
    	}
    	else{
    		return view('home');
    	}
    	
	}
    /**
     *
     * @param  array  $data
     * @param  Request $request
     */
    public function consultaParametrizada(){
		#Code
		$cidade = Request::input('pesquisa_cidade');
		$cep = Request::input('pesquisa_cep');
		$especialidade = Request::input('pesquisa_especialidade');

		$resposta = DB::table('users')
		->where('cidade', $cidade)
		->orWhere('cep', $cep)
		->orWhere('especialidade', 'like', '%'.$especialidade.'%')
		->get();

		if (!empty($resposta)){
    		# code...
    		return view('consulta.buscarProfissional')->with('profissional', $resposta);
    	}
    	else{
    		return view('consulta.buscarProfissional')->with('profissional', $resposta);
    	}
		
    }
}

<?php

namespace aquiMarceneiro\Http\Controllers;

use Illuminate\Http\Request;
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

    public function consultaParametrizada(){
    	#Code
    }
}

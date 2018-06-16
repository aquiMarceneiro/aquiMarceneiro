<?php

namespace aquiMarceneiro\Http\Controllers;

use aquiMarceneiro\Usuario;
use  Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Image;
use Auth;

class UsuarioController extends Controller
{

    public function alterarUsuario(Request $request)
    {
     //Handle the user upload of avatar
        if (isset($request)) {
            # code...
            //User information
            $user = Auth::user();
            $user->name = $request->name_usuario;
            $user->email = $request->emal_usuario;
            $user->cpf_cnpj = $request->cpf_usuario;
            $user->uf = $request->uf_usuario;
            $user->cidade = $request->cidade_usuario;
            $user->cep = $request->cep_usuario;
            $user->bairro = $request->bairro_usuario;
            $user->descricao = $request->descricao_usuario;
            $user->especialidade = $request->especialidade_usuario;

            if($request->hasFile('foto_usuario')){
                //Avatar
                $fotoUsuario = $request->file('foto_usuario');
                $fileName = time() . '.' . $fotoUsuario->getClientOriginalExtension();
                Image::make($fotoUsuario)->resize(300, 300)->save(public_path('/img/fotoupload/' . $fileName));
                $user->foto_usuario = $fileName;
            }

            $user->save();
        }
        return view('usuario.minhaConta');
    } 

}

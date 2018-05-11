<?php

namespace aquiMarceneiro\Http\Controllers;

use aquiMarceneiro\Usuario;
use  Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Image;
use Auth;

class UsuarioController extends Controller
{

    public function updateAvatar(Request $request)
    {
     //Handle the user upload of avatar
        if ($request->hasFile('foto_usuario')) {
            # code...
            $fotoUsuario = $request->file('foto_usuario');
            $fileName = time() . '.' . $fotoUsuario->getClientOriginalExtension();
            Image::make($fotoUsuario)->resize(300, 300)->save(public_path('/img/fotoupload/' . $fileName));
            $user = Auth::user();
            $user->foto_usuario = $fileName;
            $user->save();
        }
        return view('usuario.minhaConta');
    } 

}

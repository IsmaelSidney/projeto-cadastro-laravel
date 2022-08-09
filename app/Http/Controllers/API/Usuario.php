<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario as UsuarioModel;
class Usuario extends Controller
{
    public function salvar(Request $request){
       if(UsuarioModel::cadastrar($request)){
        return response("Usuário cadastro com sucesso",200);
       }else {
        return  response("erro ao cadastrar usuário",400);
       };
    }
}

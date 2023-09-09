<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ct_Usuario;
class UsuarioController extends Controller
{
    public function index (){
    
        $lista = Ct_Usuario::all();        
        return view("personalista", ["data"=> $lista]);
    }
    public function eliminar(Request $request){
        $idpers= $request->input("usu_id");        
        $persona= Ct_Usuario::where('usu_id', $idpers);
        $persona->delete();        
        echo "Se eliminó registro";
        exit();
    }
}

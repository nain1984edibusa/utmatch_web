<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ct_Usuario;

class UsuarioController extends Controller
{
    //funciones que vamos a utilizar

    public function index() 
    {
        //devuelve controller
        //return('hola desde usuario controller');

        //devuelve vista
        //return view('vista');
       //array tipo mapa pasar a la vista
       $usuarios = Ct_Usuario::all();
       return view("vista" , ['data' => $usuarios] );
    }
}

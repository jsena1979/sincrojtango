<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function inicio(){
        return view('welcome');
    }
    public function panel(){
        return view('panel');
    }

    public function procesos(){
        $proceso = ['Sincronizar Stock', 'Sincronizar Precios', 'Sincronizar Articulos'];
        //return view('procesos',['proceso'=>$procesos,'nombre'=>$nombre]);
        return view('procesos', compact('proceso','nombre'));
    }
}

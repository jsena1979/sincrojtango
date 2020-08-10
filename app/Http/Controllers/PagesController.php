<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PagesController extends Controller
{
    //
    public function inicio(){
        $consultasApi = App\ult_consulta_api::all();
        return view('welcome',compact('consultasApi'));
    }
    public function detalle($id){
        $consultas = App\ult_consulta_api::findOrFail($id);
        return view('consultasApi.detalle',compact('consultas'));
    }
    public function panel(){
        return view('panel');
    }

    public function procesos($nombre = null){
        $proceso = ['Sincronizar Stock', 'Sincronizar Precios', 'Sincronizar Articulos'];
        //return view('procesos',['proceso'=>$procesos,'nombre'=>$nombre]);
        return view('procesos', compact('proceso','nombre'));
    }
}

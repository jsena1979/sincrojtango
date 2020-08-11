<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PagesController extends Controller
{
    //
    public function inicio(){
        $consultasApi = App\ult_consulta_api::paginate(1);
        return view('welcome',compact('consultasApi'));
    }
    public function crear(Request $request){
        $request->validate([
            'id_recurso'=>'required',
            'ult_consulta_api'=>'required',
            'id_api'=>'required'
        ]);
        $datos = new App\ult_consulta_api;
        $datos->id_recurso = $request->id_recurso;
        $datos->ult_consulta_api = $request->ult_consulta_api;
        $datos->id_api = $request->id_api;
        $datos->save();
        return back()->with('mensaje', 'Consulta Agregada');
    }
    public function editar($id){
        $consultas = App\ult_consulta_api::findOrFail($id);
        return view('consultasApi.editar',compact('consultas'));
    }

    public function update(Request $request,$id ){
        $request->validate([
            'id_recurso'=>'required',
            'ult_consulta_api'=>'required',
            'id_api'=>'required'
        ]);
        $consultaUp = App\ult_consulta_api::findOrFail($id);
        $consultaUp->id_recurso = $request->id_recurso;
        $consultaUp->ult_consulta_api = $request->ult_consulta_api;
        $consultaUp->id_api = $request->id_api;
        $consultaUp->save();
        return back()->with('mensaje', 'Consulta Actualizada');
    }
    public function eliminar($id){
        $consultaEliminar = App\ult_consulta_api::findOrFail($id);
        $consultaEliminar->delete();
        return back()->with('mensaje', 'Consulta a API Eliminada');
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

@extends('plantilla');
@section('seccion')
    <h1>Detalle de Consulta a  la API</h1>
    <h4>Id:{{$consultas->id}}</h4>
    <h4>Recurso colsultado:{{$consultas->id_recurso}}</h4>
    <h4>Ultima consulta:{{$consultas->ult_consulta_api}}</h4>
    <h4>Recurso colsultado:{{$consultas->id_api}}</h4>
@endsection

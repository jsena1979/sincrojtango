@extends('plantilla')
@section('seccion')
<h1 class="display-4">Consultas a la API</h1>
@if (session('mensaje'))
    <div class="alert alert-success">{{session('mensaje')}}</div>
@endif
<form method="POST" action="{{ route('consultasApi.crear') }}">
    @csrf
    @error('id_recurso')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        El Id_recurso es obligatorio
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror
    @error('ult_consulta_api')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Ultima consulta a la API es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    @enderror
    @error('id_api')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        "id_api"  es obligatorio
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror
    <input
        type="text"
        name="id_recurso"
        placeholder="id_recurso"
        class="form-control mb-2"
        value="{{old('id_recurso')}}"
    />
    <input
        type="text"
        name="ult_consulta_api"
        placeholder="ult_consulta_api"
        class="form-control mb-2"
        value="{{old('ult_consulta_api')}}"
    />
    <input
        type="text"
        name="id_api"
        placeholder="id_api"
        class="form-control mb-2"
        value="{{old('id_api')}}"
    />
    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#Id</th>
        <th scope="col">Recurso</th>
        <th scope="col">Última consulta</th>
        <th scope="col">Id API</th>
        <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($consultasApi as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td><a href="{{route('consultasApi.detalle',$item)}}">
                    {{$item->id_recurso}}
                </a></td>
            <td>
                {{$item->ult_consulta_api}}
            </td>
            <td>{{$item->id_api}}</td>
            <td><a href="{{route('consultasApi.editar',$item)}}" class="btn btn-warning btn-sm">Editar</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection('seccion')

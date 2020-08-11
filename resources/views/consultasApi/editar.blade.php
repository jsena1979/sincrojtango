@extends('plantilla')
@section('seccion')
    <h1>Editar Datos consulta de Recurso {{$consultas->id}}</h1>
    @if (session('mensaje'))
        <div class="alert alert-success">{{session('mensaje')}}</div>
    @endif
    <form method="POST" action="{{ route('consultasApi.editar',$consultas->id) }}">
        @method('PUT')
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
            "id_api" es obligatorio
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
            value="{{$consultas->id_recurso}}"
        />
        <input
            type="text"
            name="ult_consulta_api"
            placeholder="ult_consulta_api"
            class="form-control mb-2"
            value="{{$consultas->ult_consulta_api}}"
        />
        <input
            type="text"
            name="id_api"
            placeholder="id_api"
            class="form-control mb-2"
            value="{{$consultas->id_api}}"
        />
        <button class="btn btn-warning btn-block" type="submit">Editar</button>
    </form>
@endsection

@extends('layouts.base')
@section('content')

<h1>Cargos</h1>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-1">Ações</th>
            <th class="col-1">ID</th>
            <th class="col-1">Cargo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cargos as $cargo)

        <tr>
            <td>
                <a type="button" class="btn btn-success" href="{{ route('cargo.edit',   ['id'=>$cargo->id_cargo]) }}">Editar</a>
                <a type="button" class="btn btn-primary" href="{{ route('cargo.show',   ['id'=>$cargo->id_cargo]) }}">Ver</a>
                <a type="button" class="btn btn-danger" href="{{ route('cargo.destroy',['id'=>$cargo->id_cargo]) }}">Excluir</a>
            </td>
            <td>{{$cargo->id_cargo}}</td>
            <td>{{$cargo->cargo}}</td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection
@section('scripts')

@endsection

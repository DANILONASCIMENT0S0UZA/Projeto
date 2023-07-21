@extends('layouts.base')
@section('content')

<h1>Produtos</h1>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-2">Ações</th>
            <th class="col-2">ID</th>
            <th class="col-2">Produto</th>
            <th class="col-1">Qtd Tamanhos</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos->get() as $produto)

        <tr>
            <td>
                <a type="button" class="btn btn-success" href="{{ route('produto.edit',   ['id'=>$produto->id_produto]) }}">Editar</a>
                <a type="button" class="btn btn-primary" href="{{ route('produto.show',   ['id'=>$produto->id_produto]) }}">Ver</a>
                <a type="button" class="btn btn-danger" href="{{ route('produto.destroy',['id'=>$produto->id_produto]) }}">Excluir</a>
            </td>
            <td>{{$produto->id_produto}}</td>
            <td>{{$produto->nome}}</td>
            <td>{{nl2br($produto->observacoes)}}</td>
            <td>{!! $produto->tamanhos()->count()!!}</td>

        </tr>

        @endforeach
    </tbody>
</table>
@endsection
@section('scripts')

@endsection

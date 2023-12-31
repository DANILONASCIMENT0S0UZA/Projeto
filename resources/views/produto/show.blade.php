@extends('layouts.base')
@section('content')
{{-- menu --}}
@include('produto.partials.menu')
{{-- /menu --}}

<h1> Produto:{{ $produto->nome}}</h1>
<h2> Tipo: {{$produto->tipo->tipo}}</h2>
<p>Descrição: {!! nl2br($produto->descricao)!!}</p>
@if ($produto->observacoes)
    <p class="alert alert-info">{!! nl2br($produto->observacoes) !!}</p>
@endif

<table class="table table-striped table-hover">
    <h6>
        <a class="btn btn-success" href="{{ route('produto.createTamanho', ['id_produto'=>$produto->id_produto]) }}">
            Adicionar Novo Tamanho
        </a>
    </h6>

    <thead>
        <tr>
            <th class="col-1">Ações</th>
            <th class="col-1">Tamanho</th>
            <th class="col-1">Preço</th>
            <th class="col-1">Obs.:</th>
        </tr>
    </thead>
    <tbody>
       @forelse ($produto->tamanhos()->get() as $item)

        <tr>
            <td>
            <a class="btn btn-primary" href="#"><i class="bi bi-pencil-square"></i></a>
            </td>
            <td>
                {!!$item->tamanho->tamanho!!}
            </td>
            <td>
                {{$item->preco}}
            </td>
            <td>
                {!! nl2br($item->observacoes)!!}
            </td>
        </tr>

        @empty

        <tr>
            <td colspan="4">
                nenhum tamanho definido para esse produto
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
@section('scripts')

@endsection

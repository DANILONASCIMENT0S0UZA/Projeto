<ul>
    <li>
        <a class="nav-item" href="{{ route('produto.index')}}">
            <i class="bi bi-eye"></i> Todos os produtos</a>
    </li>
    <li>
        <a class="nav-item" href="{{ route('produto.edit',
        ['id'=>$produto->id_produto]) }}"> <i class="bi bi-pencil-square"></i> Editar</a>
    </li>
</ul>

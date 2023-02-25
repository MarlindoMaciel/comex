<div>
    <ul class="nav flex-column">
        @isset( $itens )
            @foreach($itens as $item)
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home.index', ['id'=>$item->id]) }}">{{ ucfirst( mb_strtolower($item->nome) ) }}</a></li>
            @endforeach
        @endisset
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Todos os produtos</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home.index', ['id'=>-1]) }}">Os + vendidos</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home.index', ['id'=>-2]) }}">Os + recentes</a></li>
    </ul>
</div>  
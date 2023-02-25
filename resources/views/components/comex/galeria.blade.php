<div class="galeria">
    @isset( $produtos )
        @foreach($produtos as $produto)
            <div class="box">
                <div class="text-center">
                    <a data-fancybox="gallery" href="{{ asset('/comex/imagens/') }}/{{ $produto->imagem }}" data-caption="<h1>{{ $produto->nome }}</h1>{{ $produto->descricao }}<div class='valor'>R$ {{ $produto->valor_unitario }}&nbsp;&nbsp;&nbsp;&nbsp;<img src='{{ asset('/comex/imagens/') }}/carrinho.png' onclick='adicionar({{ $produto->id }})'></div>">
                        <img class="imagem" src="{{ asset('/comex/imagens/') }}/{{ $produto->miniatura }}">
                    </a>
                </div>    
              <div class="nome">{{ $produto->nome }}</div>
              
              <div class="valor">
                R$ {{ number_format( str_replace(',','.',$produto->valor_unitario), 2, ',', '.') }}
                <img class="carrinho" src="{{ asset('/comex/imagens/') }}/carrinho.png" onclick="adicionar({{ $produto->id }})">
              </div>
              <div class="vendas">{{ $produto->vendidos }} Unidades vendidas</div>
            </div>
        @endforeach
    @endisset
  </div>

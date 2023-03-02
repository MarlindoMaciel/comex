<x-comex.layout>
  @if( $pedido )
    <h4>{{ $pedido->nome_pedido }} - STATUS: {{ $pedido->status_atual }}</h4>
  @else
    <h4>Não há produtos selecionados</h4>
  @endif
  <hr>
  @isset( $listagem )
  <div class="container">
        <div class="row">
            <div class="col-4">
              <label>Produto:</label>
            </div>
            <div class="col">
              <label>Valor Unitário:</label>
            </div>
            <div class="col">
              <label>Quantidade:</label>
            </div>
            <div class="col">
              <label>Valor Parcial:</label>
            </div>
        </div>
      @foreach($listagem as $item)
        <div class="row">
            <div class="col-4">
              <input type="hidden" class="ids" value="{{ $item->id }}">
              <span class="form-control">{{ $item->nome }}</span>
            </div>
            <div class="col">
              <span class="form-control" id="valor_unitario_{{ $item->id }}" style="text-align:right">{{ str_replace(',','.',$item->valor_unitario) }}</span>
            </div>
            <div class="col">
              @if ( isset( $pedido ) and $pedido->status_atual == 'INICIADO'  ) 
                <input type="number" min="1" id="quantidade_{{ $item->id }}" class="form-control" value="{{ $item->quantidade }}" onchange="Soma()">
              @else
                <input type="number" min="1" id="quantidade_{{ $item->id }}" class="form-control" value="{{ $item->quantidade }}" readonly>
              @endif    
            </div>
            <div class="col">
              <span class="form-control parcial" id="parcial_{{ $item->id }}" style="text-align:right"></span>
            </div>
            <div class="col">
              <form method="POST" action="{{ route('operacoes.destroy',$item->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary botao">
                  <i class="fa-solid fa-close fa-sm"></i>&nbsp;
                  Remover
                </button>
              </form>
            </div>
        </div>
      @endforeach
    <hr>
    <div class="row">
            <div class="col-4">
            </div>
            <div class="col">
            </div>
            <div class="col">
              <i>VALOR TOTAL:</i>
            </div>
            <div class="col">
               <span class="form-control" id="total" style="text-align:right"></span>
            </div>
        </div>

  </div>
  <br>
  <div class="text-center">
    <button type="button" class="btn btn-primary botao" onclick="">
        <i class="fa-solid fa-shopping-cart fa-sm"></i>&nbsp;
        Concluir Compra
    </button>
    <button type="button" class="btn btn-primary botao" onclick="history.back()">
        <i class="fa-solid fa-reply fa-sm"></i>&nbsp;
        Voltar
    </button>
  </div>
@endisset
  <script>
    Soma();
  </script>
 </x-comex.layout>

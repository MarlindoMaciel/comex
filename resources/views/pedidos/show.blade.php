<x-comex.layout>
  <h4>Lista de Compras {{ $pedido->created_at }}/{{ $pedido->id }}</h4>
  <hr>
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
    @isset( $listagem )
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
              <input type="number" min="1" id="quantidade_{{ $item->id }}" class="form-control" value="{{ $item->quantidade }}" onchange="Soma()">
            </div>
            <div class="col">
              <span class="form-control parcial" id="parcial_{{ $item->id }}" style="text-align:right"></span>
            </div>
        </div>
      @endforeach
    @endisset
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
  <script>
    Soma();
    function Soma(){
      var soma = 0;
      $('.ids').each(function(){
        var id = $(this).val();
        var valorparcial = parseFloat($('#valor_unitario_'+id).html()) * $('#quantidade_'+id).val();
        $('#parcial_'+id).html((valorparcial).toFixed(2));

        var valorItem = parseFloat($('#parcial_'+id).html());

        if(!isNaN(valorItem))
          soma += parseFloat(valorItem);
      });
      
      $('#total').html((soma).toFixed(2));
    }
</script>
 </x-comex.layout>

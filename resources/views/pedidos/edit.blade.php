<x-comex.layout>
  <form method="POST" action="{{ route('pedidos.update', $item->id) }}">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $item->id }}">

    <label>Pedido:</label>
    <input type="text" name="nome" class="form-control" value="{{ $item->nome }}"><br>
    
    <label>Valor Parcial:</label>
    <input type="text" name="valor_parcial" class="form-control" value="{{ $item->valor_parcial }}"><br>
    
    <label>Valor de Desconto:</label>
    <input type="text" name="valor_desconto" class="form-control" value="{{ $item->valor_desconto }}"><br>
    
    <label>Valor Total:</label>
    <input type="text" name="valor_total" class="form-control" value="{{ $item->valor_total }}"><br>
    
    <label>Status:</label>
    <select name="status_id" class="form-control" value="{{ $item->status_id }}">
    @isset( $status ) 
      @foreach ( $status as $statu )
        <option value="{{ $statu->id }}" @if( $item->status_id == $statu->id ) selected @endif>{{ $statu->status }}</option>
      @endforeach
    @endisset
    </select>
    
    <label>Cliente:</label>
    <select name="clientes_id" class="form-control" value="{{ $item->clientes_id }}">
    @isset( $clientes ) 
      @foreach ( $clientes as $cliente )
        <option value="{{ $cliente->id }}" @if( $item->cliente_id == $cliente->id ) selected @endif>{{ $cliente->nome }}</option>
      @endforeach
    @endisset
    </select>

    <button type="submit" class="btn btn-primary">Salvar</button>&nbsp;
    <a class="btn btn-primary" href="{{ route('pedidos.index') }}">Fechar</a>
  </form>
</x-comex.layout>

<x-comex.layout>
  <form method="POST" action="{{ route('pedidos.store') }}">
    @csrf

    <label>Pedido:</label>
    <input type="text" name="nome" class="form-control" value="{{ old('nome') }}"><br>
    
    <label>Valor Parcial:</label>
    <input type="text" name="valor_parcial" class="form-control" value="{{ old('valor_parcial') }}"><br>
    
    <label>Valor de Desconto:</label>
    <input type="text" name="valor_desconto" class="form-control" value="{{ old('valor_desconto') }}"><br>
    
    <label>Valor Total:</label>
    <input type="text" name="valor_total" class="form-control" value="{{ old('valor_total') }}"><br>
    
    <label>Status:</label>
    <select name="status_id" class="form-control" value="{{ old('status_id') }}">
    @isset( $status ) 
      @foreach ( $status as $statu )
        <option value="{{ $statu->id }}">{{ $statu->status }}</option>
      @endforeach
    @endisset
    </select><br>
    
    <label>Cliente:</label>
    <select name="clientes_id" class="form-control" value="{{ old('clientes_id') }}">
    @isset( $clientes ) 
      @foreach ( $clientes as $cliente )
        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
      @endforeach
    @endisset
    </select><br>

    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-save fa-sm"></i>&nbsp;Salvar</button>&nbsp;
    <button type="button" class="btn btn-primary" onclick="history.back()"><i class="fa-solid fa-reply fa-sm"></i>&nbsp;Voltar</button>
  </form>
</x-comex.layout>

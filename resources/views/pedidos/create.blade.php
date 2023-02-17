<x-layout>
  <form method="POST" action="{{ route('pedidos.store') }}">
    @csrf

    <label>Pedido:</label>
    <input type="text" name="nome" class="form-control" value="{!! $item->nome !!}" required="required"><br>
    
    <label>Valor Parcial:</label>
    <input type="text" name="valor_parcial" class="form-control" value="{!! $item->valor_parcial !!}" required="required"><br>
    
    <label>Valor de Desconto:</label>
    <input type="text" name="valor_desconto" class="form-control" value="{!! $item->valor_desconto !!}" required="required"><br>
    
    <label>Valor Total:</label>
    <input type="text" name="valor_total" class="form-control" value="{!! $item->valor_total !!}" required="required"><br>
    
    <label>Status:</label>
    <input type="text" name="status" class="form-control" value="{!! $item->status !!}" required="required"><br>
    
    <label>Cliente:</label>
    <input type="text" name="fk_cliente" class="form-control" value="{!! $item->fk_cliente !!}" required="required"><br>

    <button type="submit" class="btn btn-primary">Salvar</button>&nbsp;
    <a class="btn btn-primary" href="{{ route('pedidos.index') }}">Fechar</a>
  </form>
</x-layout>

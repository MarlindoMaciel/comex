<x-comex.layout>
  <form method="POST" action="{{ route('clientes.update', $item->id) }}">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $item->id }}">
    <label>Nome do Cliente:</label>
    <input type="text" name="nome" class="form-control" value="{!! $item->nome !!}" required="required"><br>
    
    <label>C.P.F:</label>
    <input type="text" name="cpf" class="form-control" value="{!! $item->cpf !!}" required="required"><br>
    
    <label>Telefone:</label>
    <input type="text" name="telefone" class="form-control" value="{!! $item->telefone !!}" required="required"><br>
    
    <label>Rua:</label>
    <input type="text" name="rua" class="form-control" value="{!! $item->rua !!}" required="required"><br>
    
    <label>Número:</label>
    <input type="text" name="numero" class="form-control" value="{!! $item->numero !!}" required="required"><br>
    
    <label>Complemento:</label>
    <input type="text" name="complemento" class="form-control" value="{!! $item->complemento !!}"><br>
    
    <label>Bairro:</label>
    <input type="text" name="bairro" class="form-control" value="{!! $item->bairro !!}" required="required"><br>
    
    <label>Cidade:</label>
    <input type="text" name="cidade" class="form-control" value="{!! $item->cidade !!}" required="required"><br>
    
    <label>Estado:</label>
    <input type="text" name="estado" class="form-control" value="{!! $item->estado !!}" required="required"><br>
    
    <button type="submit" class="btn btn-primary">Salvar</button>&nbsp;
    <a class="btn btn-primary" href="{{ route('clientes.index') }}">Fechar</a>
  </form>
</x-comex.layout>

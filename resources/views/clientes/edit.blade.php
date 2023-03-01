<x-comex.layout>
  <form method="POST" action="{{ route('clientes.update', $item->id) }}">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $item->id }}">
    <label>Nome do Cliente:</label>
    <input type="text" name="nome" class="form-control" value="{{ $item->nome }}"><br>
    
    <label>C.P.F:</label>
    <input type="text" name="cpf" class="form-control" value="{{ $item->cpf }}"><br>
    
    <label>Telefone:</label>
    <input type="text" name="telefone" class="form-control" value="{{ $item->telefone }}"><br>
    
    <label>Rua:</label>
    <input type="text" name="rua" class="form-control" value="{{ $item->rua }}"><br>
    
    <label>Número:</label>
    <input type="text" name="numero" class="form-control" value="{{ $item->numero }}"><br>
    
    <label>Complemento:</label>
    <input type="text" name="complemento" class="form-control" value="{{ $item->complemento }}"><br>
    
    <label>Bairro:</label>
    <input type="text" name="bairro" class="form-control" value="{{ $item->bairro }}"><br>
    
    <label>Cidade:</label>
    <input type="text" name="cidade" class="form-control" value="{{ $item->cidade }}"><br>
    
    <label>Estado:</label>
    <input type="text" name="estado" class="form-control" value="{{ $item->estado }}"><br>
    
    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-save fa-sm"></i>&nbsp;Salvar</button>&nbsp;
    <button type="button" class="btn btn-primary" onclick="history.back()"><i class="fa-solid fa-reply fa-sm"></i>&nbsp;Voltar</button>
  </form>
</x-comex.layout>

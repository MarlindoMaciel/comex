<x-comex.layout>
  <form method="POST" action="{{ route('clientes.store') }}">
    @csrf
    <label>Nome do Cliente:</label>
    <input type="text" name="nome" class="form-control" value="{{ old('nome') }}"><br>
    
    <label>C.P.F:</label>
    <input type="text" name="cpf" class="form-control" value="{{ old('cpf') }}"><br>
    
    <label>Telefone:</label>
    <input type="text" name="telefone" class="form-control" value="{{ old('telefone') }}"><br>
    
    <label>Rua:</label>
    <input type="text" name="rua" class="form-control" value="{{ old('rua') }}"><br>
    
    <label>Número:</label>
    <input type="text" name="numero" class="form-control" value="{{ old('numero') }}"><br>
    
    <label>Complemento:</label>
    <input type="text" name="complemento" class="form-control" value="{{ old('complemento') }}"><br>
    
    <label>Bairro:</label>
    <input type="text" name="bairro" class="form-control" value="{{ old('bairro') }}"><br>
    
    <label>Cidade:</label>
    <input type="text" name="cidade" class="form-control" value="{{ old('cidade') }}"><br>
    
    <label>Estado:</label>
    <input type="text" name="estado" class="form-control" value="{{ old('estado') }}"><br>
    
    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-save fa-sm"></i>&nbsp;Salvar</button>&nbsp;
    <button type="button" class="btn btn-primary" onclick="history.back()"><i class="fa-solid fa-reply fa-sm"></i>&nbsp;Voltar</button>
  </form>  
</x-comex.layout>

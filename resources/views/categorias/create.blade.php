<x-comex.layout>
  <form method="POST" action="{{ route('categorias.store') }}">
    @csrf    

    <label>Categoria:</label>
    <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') }}">
    <br>  

    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-save fa-sm"></i>&nbsp;Salvar</button>&nbsp;
    <button type="button" class="btn btn-primary" onclick="history.back()"><i class="fa-solid fa-reply fa-sm"></i>&nbsp;Voltar</button>
  </form>
</x-comex.layout>

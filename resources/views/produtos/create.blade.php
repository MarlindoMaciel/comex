<x-comex.layout>
  <form method="POST" action="{{ route('produtos.store') }}">
    @csrf  
    <label>Produto:</label>
    <input type="text" name="nome" class="form-control" value="{{ old('nome') }}"><br>
    
    <label>Preço Unitário:</label>
    <input type="text" name="valor_unitario" class="form-control" value="{{ old('valor_unitario') }}"><br>
    
    <label>Estoque:</label>
    <input type="text" name="estoque" class="form-control" value="{{ old('estoque') }}"><br>

    <label>Imagem:</label>
    <input type="text" name="imagem" class="form-control" value="{{ old('imagem') }}"><br>
    
    <label>Miniatura:</label>
    <input type="text" name="miniatura" class="form-control" value="{{ old('miniatura') }}"><br>

    <label>Categoria:</label>
    <select name="categorias_id" class="form-control" value="{{ old('categorias_id') }}">
      @foreach($categorias as $categoria)
          @if( old('categorias_id') == $categoria->id )
            <option value="{{ $categoria->id }}" selected>{{ $categoria->nome }}</option>
          @else
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
          @endif
      @endforeach
    </select>
    <br>
    <label>Descrição:</label>
    <textarea name="descricao" class="form-control">{{ old('descricao') }}</textarea><br>
    
    <button type="submit" class="btn btn-primary">Salvar</button>&nbsp;
    <a class="btn btn-primary" href="{{ route('produtos.index') }}">Fechar</a>
    </form>
</x-comex.layout>

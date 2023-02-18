<x-comex.layout>
  <form method="POST" action="{{ route('produtos.store') }}">
    @csrf  

    <label>Produto:</label>
    <input type="text" name="nome" class="form-control" value="{{ $item->nome }}" required="required"><br>
    
    <label>Preço Unitário:</label>
    <input type="text" name="valor_unitario" class="form-control" value="{{ $item->valor_unitario }}" required="required"><br>
    
    <label>Imagem:</label>
    <input type="text" name="imagem" class="form-control" value="{{ $item->imagem }}" required="required"><br>
    
    <label>Miniatura:</label>
    <input type="text" name="miniatura" class="form-control" value="{{ $item->miniatura }}" required="required"><br>

    <label>Categoria:</label>
    <select name="fk_categoria" class="form-control" value="{{ $item->fk_categoria }}" required="required">
      @foreach($categorias as $categoria)
          @if( $item->fk_categoria == $categoria->id )
            <option value="{{ $categoria->id }}" selected>{{ $categoria->nome }}</option>
          @else
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
          @endif
      @endforeach
    </select>
    <br>

    <label>Descrição:</label>
    <textarea name="descricao" class="form-control" required="required">{!! $item->descricao !!}</textarea><br>
    
    <button type="submit" class="btn btn-primary">Salvar</button>&nbsp;
    <a class="btn btn-primary" href="{{ route('produtos.index') }}">Fechar</a>
    </form>
</x-comex.layout>

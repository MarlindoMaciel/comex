<x-comex.layout>
  <form method="POST" action="{{ route('produtos.update',$item->id) }}">
    @csrf
    @method('PUT')  
    <input type="hidden" name="id" value="{{ $item->id }}">

    <label>Produto:</label>
    <input type="text" name="nome" class="form-control" value="{{ $item->nome }}"><br>
    
    <label>Preço Unitário:</label>
    <input type="text" name="valor_unitario" class="form-control" value="{{ $item->valor_unitario }}"><br>
    
    <label>Estoque:</label>
    <input type="text" name="estoque" class="form-control" value="{{ $item->estoque }}"><br>

    <label>Imagem:</label>
    <input type="text" name="imagem" class="form-control" value="{{ $item->imagem }}"><br>
    
    <label>Miniatura:</label>
    <input type="text" name="miniatura" class="form-control" value="{{ $item->miniatura }}"><br>

    <label>Categoria:</label>
    <select name="categorias_id" class="form-control" value="{{ $item->categorias_id }}">
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

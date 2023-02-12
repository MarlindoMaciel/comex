<x-layout>
  <form method="POST" action="/produtos/store">
    @csrf
    <input type="hidden" name="fk_categoria" value="1">
      <h4>Lista de Produtos</h4>
      <p><div>
      <div class="dados">
        <input type="text" name="nome" placeholder="Digite um item para produtos" required="required">
      </div>
      <div class="dados">
        <button type="submit" class="botao">Adicionar</button>
      </div>
      </div><br></p>
  </form>
  @if( isset( $listagem ) )
    <div><hr>
        @foreach($listagem as $item)
        <p><div>
          <div class="dados">
            <div class="dados">{!! $item->nome !!}</div>
            <button type="button" class="botao" onclick="document.getElementById('modal{{ $item->id }}').style.display='inherit'">Editar</button>
            <div class="modal" id="modal{{ $item->id }}">
              <form method="POST" action="/produtos/update">
              @csrf
                <input type="hidden" name="id" value="{{ $item->id }}">
                Produto:<br><input type="text" name="nome" class="editor" value="{{ $item->nome }}" required="required"><br>
                Preço Unitário:<br><input type="text" name="valor_unitario" class="editor" value="{{ $item->valor_unitario }}" required="required"><br>
                Imagem:<br><input type="text" name="imagem" class="editor" value="{{ $item->imagem }}" required="required"><br>
                Miniatura:<br><input type="text" name="miniatura" class="editor" value="{{ $item->miniatura }}" required="required"><br>
                Categoria:<br>
                <select name="fk_categoria" class="editor" value="{{ $item->fk_categoria }}" required="required">
                  @foreach($categorias as $categoria)
                     @if( $item->fk_categoria == $categoria->id )
                        <option value="{{ $categoria->id }}" selected>{{ $categoria->nome }}</option>
                      @else
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                      @endif
                  @endforeach
                </select>
                <br>

                Descrição:<br><textarea name="descricao" class="editor" required="required">{!! $item->descricao !!}</textarea><br>
                <center><br>
                  <button type="submit" class="botao">Salvar</button>&nbsp;
                  <button type="button" class="botao" onclick="document.getElementById('modal{{ $item->id }}').style.display='none'">Fechar</button>
                </center>
              </form>
            </div>
          </div>
          <div class="dados">
              <form method="POST" action="/produtos/delete">
                @csrf
                <input type="hidden" name="id" value="{{ $item->id }}">
                <button type="submit" class="botao">Remover</button>
             </form>
          </div>
        </div><br></p>
        @endforeach
    </div>
    @endif
</x-layout>

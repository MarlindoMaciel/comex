<x-layout>
  <form  method="POST" action="{{ route('categorias.store') }}">
    @csrf
    @method('POST')
      <h4>Lstagem de Categorias</h4>
      <p><div>
      <div class="dados">
        <input type="text" name="nome" placeholder="Digite um item para Categorias" required="required">
      </div>
      <div class="dados">
        <button type="submit" class="btn btn-primary">Adicionar</button>
      </div>
      </div><br></p>
  </form>
  @if( isset( $listagem ) )
    <div><hr>
        @foreach($listagem as $item)
        <p><div>
          <div class="dados">
            <form method="POST" action="{{ route('categorias.update',$item->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $item->id }}">
            <div class="dados">{!! $item->nome !!}</div>
            <button type="button" class="btn btn-primary" onclick="document.getElementById('modal{{ $item->id }}').style.display='inherit'">Editar</button>
            <div class="modal" id="modal{{ $item->id }}">
                Categoria:<br><input type="text" name="nome" class="editor" value="{!! $item->nome !!}" required="required"><br>
                <center><br>
                  <button type="submit" class="btn btn-primary">Salvar</button>&nbsp;
                  <button type="button" class="btn btn-primary" onclick="document.getElementById('modal{{ $item->id }}').style.display='none'">Fechar</button>
                </center>
            </div>
            </form>
          </div>
          <div class="dados">
              <form method="POST" action="{{ route('categorias.destroy',$item->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary">Remover</button>
             </form>
          </div>
        </div><br></p>
        @endforeach
    </div>
    @endif
</x-layout>

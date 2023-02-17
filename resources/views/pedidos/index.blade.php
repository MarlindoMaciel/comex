<x-layout>
  <h4>Listagem de Pedidos</h4>
  <div class="row mb-3">
    <div class="col-5">
      <input type="text" name="nome" class="form-control" placeholder="Digite um item para Pedidos" required="required" >
    </div>
    <div class="col-1">
      <button type="submit" class="btn btn-primary botao">Filtrar</button>
    </div>
    <div class="col-1">
      <a href="{{ route('pedidos.create') }}" class="btn btn-primary botao">Adicionar</a>
    </div>
  </div>

  <hr>
  
  @isset( $listagem )
      @foreach($listagem as $item)
      <div class="row mb-3">
        <div class="col-5">
          <span class="form-control">{{ $item->nome }}</span>
        </div>
        <div class="col-1">
            <a href="{{ route('pedidos.edit',$item->id) }}" class="btn btn-primary botao">Editar</a>
        </div>
        <div class="col-1">
        <form method="POST" action="{{ route('pedidos.destroy',$item->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary botao">Remover</button>
             </form>
        </div>
      </div>
      @endforeach
  @endisset


</x-layout>

<x-comex.layout>
  <h4>Listagem de Pedidos</h4>
  <table id="listagem" class="table table-striped">
    <thead>
      <tr>
          <th>Pedido</th>
          <th width="20%" nowrap>Ação</th>
      </tr>
    </thead>
    <tbody>
    @isset( $listagem )
      @foreach($listagem as $item)
        <tr>
          <td>{{ $item->nome }}</td>
          <td width="15%" nowrap>
              <form method="POST" action="{{ route('pedidos.destroy',$item->id) }}">
                @csrf
                @method('DELETE')
                <a href="{{ route('pedidos.edit',$item->id) }}" class="btn btn-primary botao">
                <i class="fa-solid fa-edit fa-sm"></i>&nbsp;Editar
              </a>
                <button type="submit" class="btn btn-primary botao">
                  <i class="fa-solid fa-close fa-sm"></i>&nbsp;Remover
                </button>
              </form>
          </td>
        </tr>
      @endforeach
    @endisset
    </tbody>
  </table>
</x-comex.layout>

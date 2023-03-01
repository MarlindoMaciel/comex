<x-comex.layout>
  <h4>Listagem de Produtos</h4>
    <div style="position:absolute;z-index:1000">
      <a href="{{ route('produtos.create') }}" class="btn btn-primary botao">
        <i class="fa-solid fa-plus fa-sm"></i>&nbsp;Adicionar um novo produto
      </a>
    </div>
  <table id="listagem" class="table table-striped">
    <thead>
      <tr>
          <th>Produto</th>
          <th>Categoria</th>
          <th>Preço</th>
          <th class="text-center">Estoque</th>
          <th class="text-center">Vendas</th>
          <th width="20%" nowrap>Ação</th>
      </tr>
    </thead>
    <tbody>
    @isset( $listagem )
      @foreach($listagem as $item)
        <tr>
          <td>{{ $item->nome }}</td>
          <td>{{ $item->categoria }}</td>
          <td class="text-right">{{ $item->valor_unitario }}</td>
          <td class="text-center">{{ $item->estoque }}</td>
          <td class="text-center">{{ $item->vendidos }}</td>
          <td width="15%" nowrap>
              <form method="POST" action="{{ route('produtos.destroy',$item->id) }}">
                @csrf
                @method('DELETE')
                <a href="{{ route('produtos.edit',$item->id) }}" class="btn btn-primary botao">
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

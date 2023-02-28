<x-comex.layout>
  <h4>Listagem de Produtos</h4>
    <div style="position:absolute">
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
          <th>Estoque</th>
          <th>Vendidos</th>
          <th width="20%" nowrap>Ação</th>
      </tr>
    </thead>
    <tbody>
    @isset( $listagem )
      @foreach($listagem as $item)
        <tr>
          <td>{{ $item->nome }}</td>
          <td>{{ $item->categoria }}</td>
          <td>{{ $item->valor_unitario }}</td>
          <td>{{ $item->estoque }}</td>
          <td>{{ $item->vendidos }}</td>
          <td>
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
  <script>
        $(document).ready(ativar_tabela('listagem',{'text':'Adicionar','action':function (e,dt,node,config){ alert(1); }}));
  </script>  
</x-comex.layout>



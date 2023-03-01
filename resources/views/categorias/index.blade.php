<x-comex.layout>
  <h4>Listagem de Categorias</h4>
    <div style="position:absolute;z-index:1000;">
      <a href="{{ route('categorias.create') }}" class="btn btn-primary botao">
        <i class="fa-solid fa-plus fa-sm"></i>&nbsp;Adicionar uma nova categoria
      </a>
    </div>
  <table id="listagem" class="table table-striped">
    <thead>
      <tr>
          <th>Categoria</th>
          <th width="20%" nowrap>Ação</th>
      </tr>
    </thead>
    <tbody>
    @isset( $listagem )
      @foreach($listagem as $item)
        <tr>
          <td>{{ $item->nome }}</td>
          <td width="15%" nowrap>
              <form method="POST" action="{{ route('categorias.destroy',$item->id) }}">
                @csrf
                @method('DELETE')
                <a href="{{ route('categorias.edit',$item->id) }}" class="btn btn-primary botao">
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

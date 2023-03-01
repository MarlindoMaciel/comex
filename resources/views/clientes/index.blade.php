<x-comex.layout>
  <h4>Listagem de Clientes</h4>
    <div style="position:absolute;z-index:1000;">
      <a href="{{ route('clientes.create') }}" class="btn btn-primary botao">
        <i class="fa-solid fa-plus fa-sm"></i>&nbsp;Adicionar um novo cliente
      </a>
    </div>
  <table id="listagem" class="table table-striped">
    <thead>
      <tr>
          <th>Cliente</th>
          <th>CPF</th>
          <th>Telefone</th>
          <th>Endereço</th>
          <th>Cadastro</th>
          <th width="20%" nowrap>Ação</th>
      </tr>
    </thead>
    <tbody>
    @isset( $listagem )
      @foreach($listagem as $item)
        <tr>
          <td>{{ $item->nome }}</td>
          <td nowrap>{{ $item->cpf }}</td>
          <td nowrap>{{ $item->telefone }}</td>
          <td>{{ $item->rua }},{{ $item->numero }}, {{ $item->complemento }},{{ $item->bairro }}<br>
          {{ $item->cidade }}-{{ $item->estado }}</td>
          <td>{{ $item->created_at }}</td>

          <td width="15%" nowrap>
              <form method="POST" action="{{ route('clientes.destroy',$item->id) }}">
                @csrf
                @method('DELETE')
                <a href="{{ route('clientes.edit',$item->id) }}" class="btn btn-primary botao">
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

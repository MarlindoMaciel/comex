<x-layout>
  <form method="POST" action="{{ route('clientes.destroy',$item->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-primary">Remover</button>
  </form>
</x-layout>
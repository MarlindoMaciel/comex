<x-comex.layout>
    <form method="POST" action="{{ route('pedidos.destroy',$item->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Remover</button>
    </form>
</x-comex.layout>
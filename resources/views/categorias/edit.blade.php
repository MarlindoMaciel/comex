<x-comex.layout>
  <form method="POST" action="{{ route('categorias.update', $item->id) }}">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $item->id }}">

    <label>Categoria:</label>
    <input type="text" name="nome" id="nome" class="form-control" value="{!! $item->nome !!}" required="required">
    <br>
    <button type="submit" class="btn btn-primary">Salvar</button>&nbsp;
    <a class="btn btn-primary" href="{{ route('categorias.index') }}">Fechar</a>
  </form>
</x-comex.layout>

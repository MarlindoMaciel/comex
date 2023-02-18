<x-comex.layout>
  <h4>Lista de compras</h4>
   <hr>
  
  @isset( $listagem )
      @foreach($listagem as $item)
      <div class="row mb-3">
        <div class="col-5">
          <span class="form-control">{{ $item->nome }}</span>
        </div>
      </div>
      @endforeach
  @endisset


</x-comex.layout>

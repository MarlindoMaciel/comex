<x-comex.layout>
  <div class="row mb-2">
    <div class="col-2">
        <x-comex.lateral :itens=$menu_lateral />
    </div>
    <div class="col-10">
        <x-comex.galeria :produtos=$produtos />
    </div>
    @isset( Auth::user()->name )
      {{ Auth::user()->name }}<br>
      {{ Auth::user()->email }}<br>
    @endisset
</x-comex.layout>

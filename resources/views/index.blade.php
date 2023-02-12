<x-layout>
  <div class="row mb-2">
    <div class="col-2">
        <x-lateral :itens=$menu_lateral></x-lateral>
    </div>
    <div class="col-10">
        <x-galeria :produtos=$produtos></x-galeria>
    </div>
</x-layout>

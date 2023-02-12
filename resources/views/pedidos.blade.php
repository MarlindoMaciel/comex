<x-layout>
  <form method="POST" action="/pedidos/store">
  <input type="hidden" name="fk_cliente" value="1">
    @csrf
      <h4>Lista de Pedidos</h4>
      <p><div>
      <div class="dados">
        <input type="text" name="nome" placeholder="Digite um item para clientes" required="required">
      </div>
      <div class="dados">
        <button type="submit" class="botao">Adicionar</button>
      </div>
      </div><br></p>
  </form>
  @if( isset( $listagem ) )
    <div><hr>
        @foreach($listagem as $item)
        <p><div>
          <div class="dados">
            <form method="POST" action="/pedidos/update">
            @csrf
            <input type="hidden" name="id" value="{{ $item->id }}">
            <div class="dados">{!! $item->nome !!}</div>
            <button type="button" class="botao" onclick="document.getElementById('modal{{ $item->id }}').style.display='inherit'">Editar</button>
            <div class="modal" id="modal{{ $item->id }}">
                Pedido:<br><input type="text" name="nome" class="editor" value="{!! $item->nome !!}" required="required"><br>
                Valor Parcial:<br><input type="text" name="valor_parcial" class="editor" value="{!! $item->valor_parcial !!}" required="required"><br>
                Valor de Desconto:<br><input type="text" name="valor_desconto" class="editor" value="{!! $item->valor_desconto !!}" required="required"><br>
                Valor Total:<br><input type="text" name="valor_total" class="editor" value="{!! $item->valor_total !!}" required="required"><br>
                Status:<br><input type="text" name="status" class="editor" value="{!! $item->status !!}" required="required"><br>
                Cliente:<br><input type="text" name="fk_cliente" class="editor" value="{!! $item->fk_cliente !!}" required="required"><br>
                <center><br>
                  <button type="submit" class="botao">Salvar</button>&nbsp;
                  <button type="button" class="botao" onclick="document.getElementById('modal{{ $item->id }}').style.display='none'">Fechar</button>
                </center>
            </div>
            </form>
          </div>

          <div class="dados">
              <form method="POST" action="/pedidos/delete">
                @csrf
                <input type="hidden" name="id" value="{{ $item->id }}">
                <button type="submit" class="botao">Remover</button>
             </form>
          </div>
        </div><br></p>
        @endforeach
    </div>
    @endif
</x-layout>

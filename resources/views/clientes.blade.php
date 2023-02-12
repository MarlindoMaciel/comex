<x-layout>
  <form method="POST" action="/clientes/store">
    @csrf
      <h4>Lista de Clientes</h4>
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
            <form method="POST" action="/clientes/update">
            @csrf
            <input type="hidden" name="id" value="{{ $item->id }}">
            <div class="dados">{!! $item->nome !!}</div>
            <button type="button" class="botao" onclick="document.getElementById('modal{{ $item->id }}').style.display='inherit'">Editar</button>
            <div class="modal" id="modal{{ $item->id }}">
                Nome do Cliente:<br><input type="text" name="nome" class="editor" value="{!! $item->nome !!}" required="required"><br>
                C.P.F:<br><input type="text" name="cpf" class="editor" value="{!! $item->cpf !!}" required="required"><br>
                Telefone:<br><input type="text" name="telefone" class="editor" value="{!! $item->telefone !!}" required="required"><br>
                Rua:<br><input type="text" name="rua" class="editor" value="{!! $item->rua !!}" required="required"><br>
                Número:<br><input type="text" name="numero" class="editor" value="{!! $item->numero !!}" required="required"><br>
                Complemento:<br><input type="text" name="complemento" class="editor" value="{!! $item->complemento !!}"><br>
                Bairro:<br><input type="text" name="bairro" class="editor" value="{!! $item->bairro !!}" required="required"><br>
                Cidade:<br><input type="text" name="cidade" class="editor" value="{!! $item->cidade !!}" required="required"><br>
                Estado:<br><input type="text" name="estado" class="editor" value="{!! $item->estado !!}" required="required"><br>
                <center><br>
                  <button type="submit" class="botao">Salvar</button>&nbsp;
                  <button type="button" class="botao" onclick="document.getElementById('modal{{ $item->id }}').style.display='none'">Fechar</button>
                </center>
            </div>
            </form>
          </div>

          <div class="dados">
              <form method="POST" action="/clientes/delete">
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

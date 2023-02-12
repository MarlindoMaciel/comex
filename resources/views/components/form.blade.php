<h4>Novo registro de {{ $classe }}</h4>
<hr>
<form method="POST" action="{{ route('testes.store') }}">
    @csrf
 
    <label for="nome" class="form-label">{{ $classe }}:</label>
    <input type="text" name="nome" class="form-control" @isset($nome)value="{{ $nome }}"@endisset required="required"><br>
    <center><br>
      <button type="submit" class="btn btn-primary">Salvar</button>&nbsp;
      <a href="{{ route('testes.index') }}" class="btn btn-primary botao">Cancelar</a>
    </center>
</form>

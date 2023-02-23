<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>{{ env('APP_NAME').' '.env('APP_VERSION') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('comex/css/comex.css') }}">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="{{ asset('comex/js/comex.js') }}"></script>
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

  </head>
  <body>
    @if( session()->has('mensagem') )  
      <div class="alert alert-primary mensagem"  id="message" role="alert">
        {!! session('mensagem') !!}
      </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger mensagem">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
 
    <div class="logo"><img src="{{ asset('/comex/imagens/') }}/comex.png"></div>
    
    <x-comex.menu />
    
    <br>
    <div class="conteudo">
       {{ $slot }}
    </div>
    <script>
      onload=apagar();
      var lista = new Array();
    </script>
  </body>
</html>

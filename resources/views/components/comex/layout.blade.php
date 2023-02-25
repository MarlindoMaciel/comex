<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>{{ env('APP_NAME').' '.env('APP_VERSION') }}</title>
    <!-- jquery -->
    <script src="{{ asset('jquery/jquery.js') }}"></script>

    <!-- comex -->
    <link rel="stylesheet" href="{{ asset('comex/comex.css') }}" />
    <script src="{{ asset('comex/comex.js') }}"></script>

    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome/fontawesome.css') }}" />

    <!-- bootstrap -->   
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}" />
    <script src="{{ asset('bootstrap/bootstrap.js') }}"></script>

    <!-- fancybox -->   
    <link rel="stylesheet" href="{{ asset('fancybox/fancybox.css') }}" />
    <script src="{{ asset('fancybox/fancybox.js') }}"></script>

  </head>
  <body>
    @if( session()->has('mensagem') )  
      <div class="alert alert-primary mensagem"  id="mensagem" role="alert">
        {!! session('mensagem') !!}
      </div>
    @else  
      <div class="alert alert-primary mensagem" style="display:none;"  id="mensagem" role="alert">
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

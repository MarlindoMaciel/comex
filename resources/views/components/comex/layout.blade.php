<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

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

    <!-- datatables -->   
    <link rel="stylesheet" href="{{ asset('datatables/datatables.css') }}" />
    <link rel="stylesheet" href="{{ asset('datatables/buttons.dataTables.css') }}" />
    <script src="{{ asset('datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('datatables/dataTables.dataTables.js') }}"></script>
    <script src="{{ asset('datatables/buttons.dataTables.js') }}"></script>

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
    <div class="alert alert-danger mensagem" id="alertas">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="logo">
        <x-comex.logo />
    </div>
    
    <x-comex.menu />
    
    <br>
    <div class="conteudo">
       {{ $slot }}
    </div>
    <script>
      $(document).ready(function() { ativar_tabela('listagem'); apagar(); });
    </script>
  </body>
</html>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('home.index') }}"><i class="fa-solid fa-sm fa-home"></i>&nbsp;Home</a></li>
        <li class="nav-item">
        @if( session()->get('quantidade') > 0 )  
          <span id="quantidade" class="quantidade">
              {{ session()->get('quantidade') }}
          </span>
        @else  
          <span id="quantidade" class="quantidade" style="display:none">
          </span>
        @endif
        <a class="nav-link" href="{{ route('pedidos.show',0) }}"><i class="fa-solid fa-xs fa-shopping-cart"></i>&nbsp;Minhas compras
        </a>
        </li>
         @auth
          @if( Auth::user()->acess_level > 1 )
            <li class="nav-item"><a class="nav-link" href="{{ route('pedidos.index') }}"><i class="fa-solid fa-sm fa-list"></i>&nbsp;Pedidos</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('clientes.index') }}"><i class="fa-solid fa-sm fa-group"></i>&nbsp;Clientes</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('produtos.index') }}"><i class="fa-solid fa-sm fa-gift"></i>&nbsp;Produtos</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('categorias.index') }}"><i class="fa-solid fa-sm fa-sitemap"></i>&nbsp;Categorias</a></li>
          @endif
        @endauth
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Procurar</button>
      </form>&nbsp;
        @if (Route::has('login'))
          <div class="me-2">
            @auth
              <a href="{{ url('/dashboard') }}" class="btn btn-outline-success"><i class="fa-solid fa-sm fa-user"></i>&nbsp;Minha conta</a>
            @else
              <a href="{{ route('login') }}" class="btn btn-outline-success"><i class="fa-solid fa-sm fa-user"></i>&nbsp;Logar</a>
              @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-outline-success"><i class="fa fa-book"></i>&nbsp;Registar-se</a>
              @endif
            @endauth
            </div>
        @endif
    </div>
  </div>
</nav>

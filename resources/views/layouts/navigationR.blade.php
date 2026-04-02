<!-- header é o cabeçalho do projeto -->
 <header class="header">

 <!-- <section class="botton-geader"> -->


<nav class="navbar navbar-expand bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">

        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ Storage::url('images/logo.png') }}" alt="imagem" style="height: 100px">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
                
        <li class="nav-item">
            <a class="nav-link" href="{{ route('quemsomos') }}">quem somos</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('catalogo') }}">catálogo</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('concursos') }}">concursos</a>
        </li>

        <li class="drop-hover"><a class="nav-link" href="#">serviços <i class="bi bi-caret-down-fill"></i></a>
            <div class="drop">
                <a class="nav-link" href="{{ route('diagramacao') }}">diagramação</a>
                <a class="nav-link" href="#">revisão</a>
                <a class="nav-link" href="#">serviço 3</a>
            </div>
        </li>


        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

    </ul>
  </div>
</nav>

        
</header>
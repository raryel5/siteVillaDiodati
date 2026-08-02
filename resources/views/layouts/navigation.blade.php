<!-- header é o cabeçalho do projeto -->
<header class="header">

<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ Storage::url('images/logo-03.png') }}" alt="imagem" style="height: 110px"></a>

        <section class="top-header">
            <div class="interface">                

                <div class="btn-social">
                    <a href="https://www.instagram.com/_coletivovilla_/"><button><i class="bi bi-instagram"></i></button></a>

                    <a href="https://www.youtube.com/@VillaDiodatiColetivo"><button><i class="bi bi-youtube"></i></button></a>

                    <a href="https://web.facebook.com/coletivovilladiodati/"><button><i class="bi bi-facebook"></i></button></a>

                </div>
            </div>
        </section>

    </div>
</nav>

<!-- Parte debaixo do cabeçalho -->
<section class="botton-header">

        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="#"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-expand-sm" style="font-size: clamp(1rem, 0.3vw + 1rem, 6rem)">

                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('quemsomos') }}">quem somos</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="{{ route('catalogo') }}">catálogo</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="{{ route('concursos') }}">concursos</a>
                </li>

                {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('lancamentos') }}">lançamentos</a>
                </li> --}}

                <!-- <li class="nav-item">
                <a class="nav-link" href="{{ route('servicos') }}">serviços</a>
                </li> -->

                <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    serviços
                </a>
                <ul class="dropdown-menu">

                    <li><a class="dropdown-item" href="#">Diagramação</a></li>

                    <li><a class="dropdown-item" href="#">Revisão</a></li> -->

                    <!-- <li><hr class="dropdown-divider"></li> -->

                    <!-- <li><a class="dropdown-item" href="#">Leitura crítica</a></li>

                    <li><a class="dropdown-item" href="#">Mentoria</a></li>

                </ul>
                </li> -->

                <!-- <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li> -->

            </ul>

            <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->

            </div>
        </div>
        </nav>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        
</header>
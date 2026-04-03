<!-- header é o cabeçalho do projeto -->
    <header>

        <section class="top-header">
            <div class="interface">

                <div class="logotipo">
                    <!-- clicar na logo leva para o página inicial -->
                    <a href="{{ route('home') }}">
                        <img src="{{ Storage::url('images/logo-02.png') }}" alt="imagem" style="height: 100px">
                    </a>
                </div>
                

                <div class="btn-social">
                    <a href="https://www.instagram.com/_coletivovilla_/"><button><i class="bi bi-instagram"></i></button></a>

                    <a href="https://www.youtube.com/@VillaDiodatiColetivo"><button><i class="bi bi-youtube"></i></button></a>

                    <a href="https://web.facebook.com/coletivovilladiodati/"><button><i class="bi bi-facebook"></i></button></a>

                </div>
            </div>
        </section>

        <!-- Parte debaixo do cabeçalho -->
        <section class="botton-header">
            <div class="interface">
                <nav>
                    <ul>
                        <li><a href="{{ route('quemsomos') }}">quem somos</a></li>
                        <li><a href="{{ route('catalogo') }}">catálogo</a></li>
                        <!-- <li><a href="{{ route('novidades') }}">novidades</a></li> -->
                        <li><a href="{{ route('concursos') }}">concursos</a></li>
                        <!-- <li><a href="{{ route('publique') }}">publique</a></li> -->
                        <!-- <li><a href="{{ route('produtos') }}">produtos</a></li> -->
                        <li class="drop-hover"><a href="#">serviços <i class="bi bi-caret-down-fill"></i></a>
                            <div class="drop">
                                <a href="{{ route('diagramacao') }}">diagramação</a>
                                <a href="#">revisão</a>
                                <a href="#">serviço 3</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>

        
    </header>
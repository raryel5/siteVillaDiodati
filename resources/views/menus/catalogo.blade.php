<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Catálogo')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->

<section style="margin-left: 5%">

    <!-- <div class="container-md"> -->
        <div class="recuo">
        <br>
        <h1 style="font-size: clamp(1rem, 2.5vw + 1rem, 6rem); font-weight: lighter; letter-spacing: 9.3px">Publicações pelo Coletivo</h1>
        <br>
        </div>
    <!-- </div> -->

</section>

<!-- 

    PUBLICAÇÕES DO COLETIVO

-->
<section style="margin-left: 5%; margin-right: 5%">
    <div class="container">
        <div class="items1">
            <!-- variaveis PHP -->
            <?php $Fbotao = "Físico" ?>
            <?php $Ebotao = "E-book" ?>

            <div class="item">
                <div class="produto">
                    <a href="{{ route('livros', $id=2) }}">
                        <img src="{{ Storage::url('capas/capaNSA.jpeg') }}">
                    </a>
                </div>

                <h1>Noites Sem Alma</h1>
                <h2>vários autores, 2024</h2>
                <span>R$ 45,00</span>
                <br>
                <a href="https://www.amazon.com.br/Noites-Sem-Alma-Villa-Diodati-ebook/dp/B0CW1JNWFR">
                    <button><?php echo $Ebotao ?></button>
                </a>
                <!-- <a href="https://wa.me/5511952000213?text=Olá,%20gostaria%20de%20adquirir%20a%20coletânea%20Noites%20Sem%20Alma.%20Vim%20pelo%20site%20de%20vocês.">
                    <button><?php echo $Fbotao ?></button>
                </a> -->
            </div>
            

            <div class="item">
                <div class="produto">
                    <a href="{{ route('livros', $id=3) }}">
                        <img src="{{ Storage::url('capas/capaOQFE.jpeg') }}">
                    </a>
                </div>

                <h1>O Que Ficou no Escuro</h1>
                <h2>vários autores, 2025</h2>
                <span>R$ 50,00</span>
                <br>
                <a href="https://wa.me/5511952000213?text=Olá,%20gostaria%20de%20adquirir%20a%20coletânea%20O%20que%20Ficou%20no%20Escuro.%20Vim%20pelo%20site%20de%20vocês.">
                    <button><?php echo $Fbotao ?></button>
                </a>
                <br>
                <a href="https://www.amazon.com.br/Que-Ficou-No-Escuro-ebook/dp/B0GHP5D9N4">
                    <button><?php echo $Ebotao ?></button>
                </a>
            </div>

            <div class="item">
                <div class="produto">
                    <a href="{{ route('livros', $id=4) }}">
                        <img src="{{ Storage::url('capas/capaODDC.jpeg') }}">
                    </a>
                </div>

                <h1>O Diário da Coletora</h1>
                <h2>Renan Santana, 2025</h2>
                <span>R$ 55,00</span>
                <br>
                <a href="https://wa.me/5511996787049?text=Olá,%20gostaria%20de%20adquirir%20O%20Diário%20da%20Coletora.%20Vim%20pelo%20site%20de%20vocês.">
                    <button><?php echo $Fbotao ?></button>
                </a>
                 <br>
                <a href="https://www.amazon.com.br/Di%C3%A1rio-Coletora-Renan-Santana-ebook/dp/B0DX3KCS6C">
                    <button><?php echo $Ebotao ?></button>
                </a>               
            </div>

        </div>
    </div>
</section>

<!-- 

CAPAS DOS OUTROS LIVROS

-->
<section style="margin-left: 5%">
    <div class="recuo">
        <br>
        <h1 style="font-size: clamp(1rem, 2.5vw + 1rem, 6rem); font-weight: lighter; letter-spacing: 9.3px">Outras publicações de nossos autores</h1>
        <br>
    </div>
</section>


<section style="margin-left: 5%">
    <div class="container">
    <div class="items2">

        <div class="item">
            <div class="produto">
                <a href="{{ route('livros', $id=5) }}">
                    <img src="{{ Storage::url('capas/capaCajado.jpeg') }}">
                </a>
            </div>

            <h1>Cajado</h1>
            <h2>Assores, 2023</h2>
            <span>R$ 45,00</span>
            <br>
            <a href="https://wa.me/556291603185?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Cajado.%20Vim%20pelo%20site%20de%20vocês.">
                <button><?php echo $Fbotao ?></button>
            </a>
            <br>
            <a href="https://www.amazon.com.br/Cajado-Assores-ebook/dp/B0B92HLRP1">
                <button><?php echo $Ebotao ?></button>
            </a>
        </div>

        <div class="item">
            <div class="produto">
                <a href="{{ route('livros', $id=8) }}">
                    <img src="{{ Storage::url('capas/capaDRVP.jpeg') }}">
                </a>
            </div>

            <h1>Dedo em Riste, Verso em Prosa</h1>
            <h2>Israel de Oliveira Costa, 2023</h2>
            <span>R$ 60,00</span>
            <br>
            <a href="https://wa.me/558699203283?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Dedo%20em%20Riste,%20Verso%20em%20Prosa.%20Vim%20pelo%20site%20de%20vocês.">
                <button><?php echo $Fbotao ?></button>
            </a>
            <br>
            <a href="https://www.amazon.com.br/riste-verso-prosa-Israel-Oliveira-ebook/dp/B0CLL64DCZ">
                <button><?php echo $Ebotao ?></button>
            </a>
        </div>

        <!-- <div class="item">
            <div class="produto">
                <a href="#">
                    <img src="{{ Storage::url('capas/capaEPQSG.jpeg') }}">
                </a>
            </div>

            <h1>Eles Pensam Que Somos Gatos</h1>
            <h2>Luciana Cunha Pereira, AAAA</h2>
            <span>R$ XX,XX</span>
            <br>
            <button><?php echo $Fbotao ?></button>

        </div> -->

        <div class="item">
            <div class="produto">
                <a href="{{ route('livros', $id=7) }}">
                    <img src="{{ Storage::url('capas/capaNoturnos.jpeg') }}">
                </a>
            </div>

            <h1>Noturnos</h1>
            <h2>Renan Santana, 2023</h2>
            <span>R$ 50,00</span>
            <br>
            <a href="https://wa.me/5511996787049?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Noturnos.%20Vim%20pelo%20site%20de%20vocês.">
                <button><?php echo $Fbotao ?></button>
            </a>
            <br>
            <a href="https://www.amazon.com.br/Noturnos-Renan-Santana-ebook/dp/B0C64NW59T">
                <button><?php echo $Ebotao ?></button>
            </a>

        </div>

        <div class="item">
            <div class="produto">
                <a href="{{ route('livros', $id=1) }}">
                    <img src="{{ Storage::url('capas/capaOSM.jpeg') }}">
                </a>
            </div>

            <h1>Os Segredos da Mata</h1>
            <h2>Taís Turaça Arantes & Renan Aryel, 2022</h2>
            <span>R$ 32,50</span>
            <br>
            <a href="https://wa.me/5567996638417?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Os%20Segredos%20da%20Mata.%20Vim%20pelo%20site%20de%20vocês.">
            <button><?php echo $Fbotao ?></button>
            </a>
            
            <br>
            <a href="https://wa.me/5567996638417?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Os%20Segredos%20da%20Mata.%20Vim%20pelo%20site%20de%20vocês.">
                <button><?php echo $Ebotao ?></button>
            </a>            

        </div>

        <div class="item">
            <div class="produto">
                <a href="{{ route('livros', $id=6) }}">
                    <img src="{{ Storage::url('capas/capaSSM.jpeg') }}">
                </a>
            </div>

            <h1>SS Misery</h1>
            <h2>Assores, 2023</h2>
            <span>R$ 45,00</span>
            <br>
            <a href="https://wa.me/556291603185?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20Cajado.%20Vim%20pelo%20site%20de%20vocês.">
                <button><?php echo $Fbotao ?></button>
            </a>
            <br>
            <a href="https://wa.me/556291603185?text=Olá,%20gostaria%20de%20adquirir%20seu%20livro:%20SS%20Misery.%20Vim%20pelo%20site%20de%20vocês.">
                <button><?php echo $Ebotao ?></button>
            </a>

        </div>

    </div>
    </div>
</section>





<!-- <div class="container-caixa">

        <textarea class="minha-caixa" id="" name="" rows="20" cols="50" placeholder="">Teste e mais testes.</textarea>
    </div> -->


@endsection
<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'lançamentos')

<!-- corpo da página -->
@section('main')
<!-- tudo aqui será renderizado com base no template -->


<!-- <section style="margin-left: 5%">
    <div class="recuo">
        <br>
        <h2 style="font-size: clamp(1rem, 1.3vw + 1rem, 6rem); letter-spacing: 4.0px">Pré-lançamento:</h2>

        <h1 style="font-size: clamp(1rem, 2.5vw + 1rem, 6rem); font-weight: lighter; letter-spacing: 9.3px">TÍTULO DO LIVRO</h1>
        <br>
        <h2>do autor Anderson José</h2>
    </div>
</section> -->

<div class="text-centralizado">
    <br>
    <p style="font-size: clamp(1rem, 2vw + 1rem, 4rem); color: #b62945; border-color: red">
        <b>Atenção: Página em construção.</b>
    </p>
    <br>
</div>

<section class="section-corpo">

    <div class='recuo' style="width: 75%; line-height: 35px; align-items: center">
        <br>
        <h2 style="font-size: clamp(1rem, 1.3vw + 1rem, 6rem); letter-spacing: 4.0px">Pré-lançamento:</h2>

        <h1 style="font-size: clamp(1rem, 2.5vw + 1rem, 6rem); font-weight: lighter; letter-spacing: 9.3px">O Diabo são as Verdades que não te Contam</h1>
        <br>
        <h2>do autor Anderson José</h2>
    </div>

    <div class="flex-servicos">

        <div class="card-servico">
            <div class="corpo-servico">
                <div class="servico-foto">
                    <img src="{{ Storage::url('lancamentos/card01.jpeg') }}" style="max-width: 100%; display: block">
                </div>
            </div>

        </div>

        <?php
            $valor = "5.00";
        ?>

        <div class="card-servico">
            <div class="title-servico">
                <h1>Dias restantes</h1>
                <h2>XX dias</h2>
                <h3>R$ {{ $valor }}</h3>             
            </div>
            <br>

            <a href="{{ route('clientes-create') }}">
                <button>Adquira aqui</button>
            </a>
            

            <!-- {{-- <a href="#">
                <button>Compre aqui 2</button>
            </a> --}} -->

        </div>    
    </div>

    <div class="flex-servicos">
        <!-- {{-- <div class="servico-desc"> --}} -->
        <div class="text-justificado">
            <h1>SINOPSE</h1>
            <br>
            <p>Nuno Nepomuceno, o mais respeitado investigador de Portugal, vê sua vida ruir quando um caso antigo volta à tona, reabrindo feridas que o tempo tentou sepultar.</p>
            <p>À medida que corpos surgem em cenários sagrados e símbolos religiosos se transformam em assinaturas de horror, Nuno percebe que o mal pode estar mais próximo do que imagina — talvez dentro da própria casa, ou do coração daqueles em quem mais confia.</p>
            <p>Entre a justiça e a vingança, o amor e a perdição, ele será obrigado a encarar não apenas um assassino, mas a própria face do inferno.</p>
            <p>Porque, às vezes, o diabo não mente. Apenas conta as verdades que ninguém quer ouvir.</p>
            <br>

            <h1>SOBRE O AUTOR</h1>
            <br>
            <p>Anderson José dos Anjos é escritor brasileiro e terapeuta. Durante muitos tempos atuou como servidor público, experiência que lhe permitiu observar de perto diferentes realidades humanas e sociais.</p>
            <p>Hoje dedica-se à terapia e à escrita, explorando em suas obras gêneros como terror, horror, romance policial, mistério e fantasia. Suas histórias costumam mergulhar nos conflitos da mente humana, no medo, no suspense e nos limites entre realidade e imaginação.</p>
            <p>Vivendo entre o Brasil e Portugal, Anderson encontra inspiração nas experiências da vida real, transformando sentimentos, inquietações e reflexões sobre a natureza humana em narrativas intensas e envolventes.</p>
            <br>

            <h1>CRONOGRAMA</h1>
            <br>
            <p><?php echo fake()->paragraphs(2, true); ?></p>
            <br>
            <h2>Detalhes da edição:</h2>
            <br>
            <p>Tamanho: 16X23</p>
            <p>Número de páginas: 304</p>
            <p>ISBN (físico): 9786501973784</p>
        </div>

    </div>    

</section>

@endsection
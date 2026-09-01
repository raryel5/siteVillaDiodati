<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'lançamentos')

<!-- corpo da página -->
@section('main')

<!-- CONTAGEM REGRESSIVA DA CAMPANHA -->
<?php
    use Carbon\Carbon;

    // Data e hora de vencimento com fuso
    $dataFinal = Carbon::create(2026, 10, 31, 23, 59, 59, -3);
    // Data e hora atual com fuso
    $agora = Carbon::now(-3);

    // Retorna os dias e horas restantes como um objeto de intervalo
    $restante = $agora->diff($dataFinal);

    // Se a data já passou, exibe uma mensagem personalizada
    if ($agora->greaterThan($dataFinal)) {
        $prazo = "Pré-venda encerrada";
    } else {
        $prazo = "{$restante->days} dias e {$restante->hours} horas para o fim da campanha";
    }
?>

<!-- VALORES DAS RECOMPENSAS -->
<?php
    $valor01 = "15.00";
    $valor02 = "30.00";
    $valor03 = "56.80";
    $valor04 = "66.80";
    $valor05 = "77.80";
    $valor06 = "96.80";
    $valor07 = "96.80";
    $valor08 = "126.80";
    $valor09 = "150.00";
    $valor10 = "225.00";        
?>

<!-- tudo aqui será renderizado com base no template -->

<!-- <div class="text-centralizado">
    <br>
    <p style="font-size: clamp(1rem, 2vw + 1rem, 4rem); color: #b62945; border-color: red">
        <b>Atenção: Página em construção.</b>
    </p>
    <br>
</div> -->

<section class="section-corpo">

    <div class="campanha-cabecalho">
        <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/cover.jpg') }}">
        <br>
        <br>
        <h2 style="font-size: clamp(1rem, 1.3vw + 1rem, 6rem); letter-spacing: 4.0px">Um lançamento de Anderson José</h2>
        <br>
        <h3><b>{{ $prazo }}</b></h3>
    </div>

    <!-- <div class="flex-campanha" style="align-items: center">

        <div class="card-campanha-inicio">
            <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/card02.jpg') }}" style="max-width: 100%; display: block">
        </div>

        <div class="card-campanha-inicio">

            <div class="">
                <h3><b>{{ $prazo }}</b></h3>
                <br>
                <p style="text-align: center">Valor: R$ {{ $valor03 }} c/ frete incluso</p>
            </div>
            <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/recompensas/recompensa03.jpg') }}" style="max-width: 100%; display: block">                
            <br>
            <a href="{{ route('clientes-create', $valor03) }}">
                <button>Adquira aqui</button>
            </a>
        </div>

    </div> -->
    <br>

    <div class="flex-campanha" style="border: none">

        <!-- DESCRIÇÃO DO PROJETO E OUTROS DETALHES -->
        <div class="descricao-group" style="border: 2px solid #7e6345; border-radius: 24px">
            <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/projeto.jpg') }}" style="max-width: 100%; display: block">
            <br>
            <p>Nuno Nepomuceno, o mais respeitado investigador de Portugal, vê sua vida ruir quando um caso antigo volta à tona, reabrindo feridas que o tempo tentou sepultar.</p>
            <p>À medida que corpos surgem em cenários sagrados e símbolos religiosos se transformam em assinaturas de horror, Nuno percebe que o mal pode estar mais próximo do que imagina — talvez dentro da própria casa, ou do coração daqueles em quem mais confia.</p>
            <p>Entre a justiça e a vingança, o amor e a perdição, ele será obrigado a encarar não apenas um assassino, mas a própria face do inferno.</p>
            <p>Porque, às vezes, o diabo não mente. Apenas conta as verdades que ninguém quer ouvir.</p>
            <br>
            <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/card02.jpg') }}" style="max-width: 100%; display: block">

            <br><br><br>
            <!-- <h1>Sobre o Autor</h1> -->

            <div class="foto-text">
                <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/bio.jpg') }}" style="max-width: 100%; display: block">
                <!-- <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/foto.jpeg') }}" alt="Foto do autor" width="300">
                <br>
                <p>Anderson José dos Anjos é escritor brasileiro e terapeuta. Durante muitos tempos atuou como servidor público, experiência que lhe permitiu observar de perto diferentes realidades humanas e sociais.</p>
                <p>Hoje dedica-se à terapia e à escrita, explorando em suas obras gêneros como terror, horror, romance policial, mistério e fantasia. Suas histórias costumam mergulhar nos conflitos da mente humana, no medo, no suspense e nos limites entre realidade e imaginação.</p>
                <p>Vivendo entre o Brasil e Portugal, Anderson encontra inspiração nas experiências da vida real, transformando sentimentos, inquietações e reflexões sobre a natureza humana em narrativas intensas e envolventes.</p> -->
            </div>
        

            <br>
            <br>
            <h1>Detalhes do Livro</h1>
            <br>
            <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/previa.jpg') }}" style="max-width: 100%; display: block">
            <br>
            <br>

            <!-- CRONOGRAMA -->
            <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/cronograma.jpg') }}" style="max-width: 100%; display: block">
            <br>

            <div style="text-align: left; max-width: 600px; margin: 0 auto">

                <h2>Setembro:</h2>
                <ul style="font-size: clamp(1rem, 1vw + 0.5rem, 6rem); display: inline-block; text-align: left">
                    <li>Organização</li>
                    <li>Arrecadação</li>
                    <li>Edição</li>
                    <li>Diagramação</li>
                </ul>
            </div>

            <div style="text-align: left; max-width: 600px; margin: 0 auto">
                <h2>Outubro:</h2>
                <ul style="font-size: clamp(1rem, 1vw + 0.5rem, 6rem); display: inline-block; text-align: left">                    
                    <li>Contato com gráficas</li>
                    <li>Impressão</li>
                    <li>Recebimento e distribuição de livros</li>
                </ul>
            </div>

            
            
            
            
            
            
            



        </div>

        <!-- RECOMPENSAS -->
        <div class="recompensas-group">
            <?php $botao = "Adquira aqui" ?>

            <div class="recompensa">
                <form action="{{ route('clientes-doacao') }}" method="POST">
                    @csrf
                    <h1><label for="valor">Doe qualquer valor:</label></h1>                    
                    <br>
                    <input type="text" id="valor" name="valor_doado" required>
                    <br><br>
                    <button type="submit">Doar</button>
                </form>
            </div>
            <br>

            <h1><b>Recompensas</b></h1>

            <div class="recompensa">
                <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/recompensas/recompensa01.jpg') }}">

                <a href="{{ route('clientes-create', $valor01) }}">
                    <button> {{ $botao }} </button>
                </a>
            </div>

            <div class="recompensa">
                <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/recompensas/recompensa02.jpg') }}">

                <a href="{{ route('clientes-create', $valor02) }}">
                    <button>{{ $botao }}</button>
                </a>                
            </div>

            <div class="recompensa">
                <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/recompensas/recompensa03.jpg') }}">

                <a href="{{ route('clientes-create', $valor03) }}">
                    <button>{{ $botao }}</button>
                </a>                
            </div>

            <div class="recompensa">
                <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/recompensas/recompensa04.jpg') }}">

                <a href="{{ route('clientes-create', $valor04) }}">
                    <button>{{ $botao }}</button>
                </a>                
            </div>

            <div class="recompensa">
                <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/recompensas/recompensa05.jpg') }}">

                <a href="{{ route('clientes-create', $valor05) }}">
                    <button>{{ $botao }}</button>
                </a>                
            </div>

            <div class="recompensa">
                <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/recompensas/recompensa06.jpg') }}">

                <a href="{{ route('clientes-create', $valor06) }}">
                    <button>{{ $botao }}</button>
                </a>                
            </div>

            <div class="recompensa">
                <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/recompensas/recompensa07.jpg') }}">

                <a href="{{ route('clientes-create', $valor07) }}">
                    <button>{{ $botao }}</button>
                </a>                
            </div>

            <div class="recompensa">
                <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/recompensas/recompensa08.jpg') }}">

                <a href="{{ route('clientes-create', $valor08) }}">
                    <button>{{ $botao }}</button>
                </a>                
            </div>

            <div class="recompensa">
                <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/recompensas/recompensa09.jpg') }}">

                <a href="{{ route('clientes-create', $valor09) }}">
                    <button>{{ $botao }}</button>
                </a>                
            </div>

            <div class="recompensa">
                <img src="{{ Storage::url('lancamentos/preVendaAnderson2026/recompensas/recompensa10.jpg') }}">

                <a href="{{ route('clientes-create', $valor10) }}">
                    <button>{{ $botao }}</button>
                </a>                
            </div>

        </div>

    </div>


</section>

@endsection
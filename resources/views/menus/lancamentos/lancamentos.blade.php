<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'lançamentos')

<!-- corpo da página -->
@section('main')

<!-- CONTAGEM REGRESSIVA DA CAMPANHA -->
<?php
    use Carbon\Carbon;

    // Data limite ou de vencimento
    $dataFinal = Carbon::parse('2026-10-10 23:59:59');
    $agora = Carbon::now()->startOfDay();

    // Retorna os dias e horas restantes como um objeto de intervalo
    $restante = $agora->diff($dataFinal);

    // Se a data já passou, exibe zero ou uma mensagem personalizada
    if ($agora->greaterThan($dataFinal)) {
        $prazo = "Prazo encerrado";
    } else {
        $prazo = "Restam {$restante->days} dias e {$restante->h} horas";
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

<div class="text-centralizado">
    <br>
    <p style="font-size: clamp(1rem, 2vw + 1rem, 4rem); color: #b62945; border-color: red">
        <b>Atenção: Página em construção.</b>
    </p>
    <br>
</div>

<section class="section-corpo">

    <div class="campanha-cabecalho">
        <img src="{{ Storage::url('lancamentos/Card.png') }}" style="max-width: 100%; display: block">
        <br>
        <h2 style="font-size: clamp(1rem, 1.3vw + 1rem, 6rem); letter-spacing: 4.0px">Um lançamento de Anderson José</h2>
    </div>

    <div class="flex-campanha">
        <div class="card-campanha-inicio">
            <img src="{{ Storage::url('lancamentos/card01.png') }}" style="max-width: 100%; display: block">
        </div>

        <div class="card-campanha-inicio">
            <div class="text-left">
                <h1>{{ $prazo }}</h1>
                <br>
                <h2>Valor: R$ {{ $valor03 }} c/ frete incluso</h2>
            </div>
            <!-- <img src="{{ Storage::url('lancamentos/recompensas/recompensa03.jpg') }}" style="max-width: 100%; display: block">                 -->
            <br>
            <a href="{{ route('clientes-create', $valor03) }}">
                <button>Adquira aqui</button>
            </a>
        </div>

    </div>

    <div class="flex-campanha">
        <div class="descricao-group">
            <h1 class="">O Projeto</h1>
            <img src="{{ Storage::url('lancamentos/sinopse.jpg') }}" style="max-width: 100%; display: block">                

        </div>

        <div class="recompensas-group">
            <h1 class="">Recompensas</h1>

            <div class="recompensa">
                <img src="{{ Storage::url('lancamentos/recompensas/recompensa01.jpg') }}" style="max-width: 100%; display: block">

            </div>
            <br>
            <div class="recompensa">
                <!-- <?php echo fake()->paragraphs(2, true); ?> -->
                <img src="{{ Storage::url('lancamentos/recompensas/recompensa02.jpg') }}" style="max-width: 100%; display: block">
                
            </div>
        </div>

    </div>


</section>

@endsection
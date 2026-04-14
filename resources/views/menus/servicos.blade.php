<!-- as configurações de página estão layouts/app -->
@extends('layouts.app')

@section('title', 'Serviços')

<!-- corpo da página -->
@section('main')
    <!-- tudo aqui será renderizado com base no template -->

<section class="section-corpo">

    <div class='recuo' style="width: 75%; line-height: 35px; align-items: center">
        <br>
        <h1 style="font-family: 'Aesthetic'; font-size: clamp(1rem, 12vw + 1rem, 6rem)">VILLA DIODATI</h1>
        <h1 style="font-size: clamp(1rem, 3.5vw + 1rem, 3.7rem); font-weight: lighter; letter-spacing: 9.3px">Coletivo de Autores</h1>        
        <br>
        <h2>O Villa também oferece serviços editoriais para o seu livro!</h2>
        <br>
    </div>
    <div class="flex-servicos">

        <div class="card-servico">

            <div class="title-servico">
                <h1>Título do serviço</h1>
            </div>

            <div class="corpo-servico">
                <div class="servico-foto">
                    <img src="{{ Storage::url('fotos/dwight.jpg') }}" style="max-width: 100%; display: block">
                    <legend style="text-align: center">Dwight Schrute</legend>
                </div>

                <div class="servico-desc">
                    <p>Uma descrição do serviço aqui...</p>
                    <p><?php echo fake()->paragraphs(1, true); ?></p>
                </div>

            </div>

            <a href="#">
                <button>Contrate aqui</button>
            </a>

        </div>

         <div class="card-servico">
            <div class="title-servico">
                <h1>Título do serviço</h1>

            </div>
            <div class="corpo-servico">
                <div class="servico-foto">
                    <img src="{{ Storage::url('fotos/dwight.jpg') }}" style="max-width: 100%; display: block">
                    <legend style="text-align: center">Dwight Schrute</legend>
                </div>
                <div class="servico-desc">
                    <p>Uma descrição do serviço aqui...</p>
                    <p><?php echo fake()->paragraphs(1, true); ?></p>
                </div>
            </div>
            <a href="#">
                <button>Contrate aqui</button>
            </a>
        </div>

         <div class="card-servico">
            <div class="title-servico">
                <h1>Título do serviço</h1>

            </div>
            <div class="corpo-servico">
                <div class="servico-foto">
                    <img src="{{ Storage::url('fotos/dwight.jpg') }}" style="max-width: 100%; display: block">
                    <legend style="text-align: center">Dwight Schrute</legend>
                </div>
                <div class="servico-desc">
                    <p>Uma descrição do serviço aqui...</p>
                    <p><?php echo fake()->paragraphs(1, true); ?></p>
                </div>
            </div>
            <a href="#">
                <button>Contrate aqui</button>
            </a>
        </div>

         <div class="card-servico">
            <div class="title-servico">
                <h1>Título do serviço</h1>

            </div>
            <div class="corpo-servico">
                <div class="servico-foto">
                    <img src="{{ Storage::url('fotos/dwight.jpg') }}" style="max-width: 100%; display: block">
                    <legend style="text-align: center">Dwight Schrute</legend>
                </div>
                <div class="servico-desc">
                    <p>Uma descrição do serviço aqui...</p>
                    <p><?php echo fake()->paragraphs(1, true); ?></p>
                </div>
            </div>
            <a href="#">
                <button>Contrate aqui</button>
            </a>
        </div>        

    </div>
</section>




@endsection
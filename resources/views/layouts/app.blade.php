<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta property="og:image" content="{{ $metaImage ?? asset('images/logo-03.png') }}">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LRN3CK6VMY"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-LRN3CK6VMY');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ Storage::url('images/favicon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <!-- icone de PDF -->
    <!-- <link rel="stylesheet" href="https://cloudflare.com"> -->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');

        body{

            /* font-family: Georgia, 'Times New Roman', Times, serif; */
            font-family: 'Quicksand', sans-serif;
        }

        /* configurações de cabeçalho */
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .interface{
            max-width: 1280px;
            margin: 0 auto;
        }

        header, div {
            box-sizing: border-box;
        }

        header{
            width: 90%;
            background-color: #424147;
            /* background-color: #fff; */
            /* position: relative; */
            /* width: 1220px; */
            /* max-width: 90%; */
            /* height: 120px; */
            top: 0px;
            right: 0px;
            left: 0px;
            margin: 0px auto;
        }

        /*  */
        #logo {
        position: absolute;
        width: 120px;
        top: 0px;  
        bottom: 0px;
        left: 0px;
        
        /* border: 1px solid red; */
        /* background-color: rgba(255, 0, 0, 0.1); */
        }

        #superior {
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 60px;
        left: 120px;
        
        /* border: 1px solid green; */
        /* background-color: rgba(0, 255, 0, 0.1); */
        }

        #inferior {
        position: absolute;
        top: 60px;
        right: 0px;
        bottom: 0px;
        left: 300px;   
        
        /* border: 1px solid blue; */
        /* background-color: rgba(0, 0, 255, 0.1); */
        }


        #superior, #inferior {
        text-align: right;
        line-height: 40px;
        padding: 10px;
        }
        /*  */

        .top-header > .interface{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .top-header{
            /* background-color: #fff; */
            padding: 20px 4%;
        }

        .top-header .logotipo img{
            max-width: 240px;
        }

        .top-header .btn-social button{
            width: 50px;
            height: 50px;
            font-size: 20px;
            border-radius: 50%;
            background-color: transparent;
            border: 2px solid #000;
            cursor: pointer;
        }

        /* .botton-header nav ul{
            display: flex;
            align-items: center;
            justify-content: center;
            list-style-type: none;
        } */

        .botton-header nav ul li a{
            color: #fff;
            padding: 10px 40px;
            text-decoration: none;
            font-weight: 750;
            display: block;
            transition: .2s;
        }

        .botton-header nav ul li a:hover{
            background-color: #ED6b86;   
            color: #424247;
            box-shadow: inset 0 0 8px #000;
        }

        .nav-list {
            display: flex;
            gap: 32px;
        }

        /* configurações de menu abaixo do cabeçalho */
        .drop-hover{
            position: relative;
        }

        .drop-hover .drop{
            position: absolute;
            background-color: #65636b;
            width: 100%;
            height: 0;
            overflow: hidden;
            transition: 0.5s;
        }

        .drop-hover .drop a{
            padding: 20px;
        }

        .drop-hover:hover .drop{
            height: 190px;
        }

        /* caixas de texto */

        /* remove as margens do h1*/
        h1 {
            margin: 0;
        }

        .section-corpo {
            margin-left: 5%;
            margin-right: 5%;
        }

        .recuo {
            width: 55%;
            line-height: 35px;
            align-items: center;
        }

        /* .recuo-parag {
            width: 100%;
            font-size: 20px;
            line-height: 40px;
            align-items: center;
        } */

        .text-justificado {
            text-align: justify;
            /* align-items: center; */
            padding: 10px 15%;
            line-height: 35px;
            /* align-items: center; Centers vertically */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Centers horizontally */
        }

        .text-centralizado {
            align-items: center;
            padding: 10px 15%;
            line-height: 35px;
            /* align-items: center; Centers vertically */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Centers horizontally */
        }

        .text-centralizado h1 {
            font-family:'Aesthetic';
            font-size: clamp(1rem, 5.5vw + 1rem, 6rem);
            text-align: center;
        }

        .text-centralizado h2 {
            font-family: 'Quicksand', sans-serif;
            font-size: clamp(1rem, 2.5vw + 1rem, 6rem);
            font-weight: lighter;
            letter-spacing: 9.3px; 
            text-align: center;
        }

        .text-centralizado h3 {
            font-size: clamp(1rem, 1.5vw + 1rem, 6rem);
            text-align: center;
        }

        .text-centralizado p {
            font-size: clamp(1rem, 0.5vw + 1rem, 4rem);
            text-align: justify;
        }

        .text-centralizado button {
            background-color: #424247;
            height: 2.9em;
            border: none;
            width: 19em;
            align-items: center;
            color: #fff;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 12px;
        }

        .text-centralizado button:hover {
            background-color: #ED6b86;
            cursor: pointer;
        }

        .text-left{
            text-align: left;
        }

        .container-caixa {
            display: flex;
            justify-content: left;
            margin-top: 50px;
            margin-left: 50px;
        }

        .container-form {
            padding: 20px;
            /* width: 100%; */
            /* Coloca as filhas lado a lado */
            display: flex;
            /* Espaço entre as divs */
            gap: 30px;
            /* Centers vertically */
            align-items: center; 
            /* Centers horizontally */
            justify-content: center;
        }

        iframe {
            border: 2px solid #ccc; /* Adiciona uma borda */
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Sombra */
        }

        .minha-caixa {
            padding: 10px 10px;
            border: 2px #fff;
            border-radius: 5px;
            width: 400px;
            height: 400px;
        }

        .textWidePage {
            margin-left: 50px;
            width: 1280px;
            line-height: 55px;
            align-items: center;
        }

        /* Configurações de tabelas */

        .tablePosition {
            justify-content: center;
            margin-top: 50px;
            margin-left: 50px;
        }

        /* Cards de produtos */

        .container {
            /* Coloca as filhas lado a lado */
            /* display: flex; */
            /* gap: 30px;      Espaço entre as divs */
            align-items: center;
            justify-content: center;
        }

        .container button {
            /* font-size: 30px; */
            background-color: #424247;
            height: 2em;
            width: 85%;
            border: none;
            /* padding: 2%; */
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 12px;
        }

        .container button:hover {
            background-color: #ED6b86;
            cursor: pointer;
        }

        .items1 {
            display: grid;
            /* grid-template-columns: repeat(3, 1fr); */
            grid-template-columns: repeat(auto-fit, minmax(160px, 165px));
            grid-gap: 3%;
            justify-content: center;

        }

        .items2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 165px));
            grid-gap: 3%;
            justify-content: center;
        }

        .item {
            text-align: center;
            background-color: #e6dede;
            padding: 10px 10px 10px 10px;
            display: flex;
            /* justify-content: center; */
            align-items: center;
            flex-direction: column;
            position: relative;
            border-radius: 12px;
            box-shadow: 4px 4px 16px #aaaa;
            max-height: 480px;
        }

        .item h1 h2 span {
            justify-content: center;
            align-items: center;
        }

        /* capa */
        .produto {
            text-align: center;
            height: 220px;
            width: 100%;
            border-radius: 5px;
            align-items: flex-start;
        }

        .item img {
            /* width: 90%; */
            height: 90%;
        }

        .item h1 {
            font-size: 1.2rem;
        }

        .item h2 {
            font-size: .9rem;
            color: #3a3636aa;
        }

        .item a {
            height: 2em;
            border: none;
            width: 100%;
        }

        .item button {
            background-color: #424247;
            height: 2em;
            border: none;
            padding: 2%;
            width: 85%;
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 12px;
        }

        .item button:hover {
            background-color: #ED6b86;
            cursor: pointer;
        }

        /* CONTAINER PARA PAGINA DOS LIVROS */

        .livro-container{
            display: flex; /* disposicao flexível de divs */
            /* flex-direction: column; */
            flex-wrap: wrap;
            gap: 25px; /* espaço entre divs */
            /* padding: 10px; distancia da borda da pagina */
            flex-direction: row;
            width: 100%;
            max-width: 1000px;
            justify-content: center;
            
        }

        .elemento-container-capa{
            flex: 1 1 10%;
            width: 50%; /* Largura */
            max-width: 350px;
            height: 100%; /* Altura */
            margin-top: 25px;
            /* margin-right: 5%; */
            display: flex;
            flex-direction: column; /* alinhar divs em linha*/
            justify-content: center;
            background-color: white; /* Cor de fundo */
            border: 1px solid white; /* cor da borda */
            border-radius: 12px;
            
        }

        .elemento-capa {
            text-align: center;
            margin-top: 5px;            
        }

        .elemento-capa-desc {
            text-align: center;
            /* justify-content: center; */
            align-items: center;
            border-radius: 5px;
            /* padding: 5px; */
            margin-top: 5px; 
        }

        .elemento-capa img{
            width: 100%; /* Largura */
            box-shadow: 4px 4px 16px #aaaa;
        }

        .elemento-capa-desc h1 {
            font-size: clamp(1rem, 4vw + 2rem, 1.3rem);
            margin-top: 5px; 
        }

        .elemento-capa-desc h2 {
            font-size:1rem;
            color: #242121aa;
            margin-top: 5px;
        }

        .elemento-capa-desc button {
            background-color: #424247;
            margin-top: 10px;
            height: 2.5em;
            border: none;
            /* padding: 2%; */
            width: 10em;
            color: #fff;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 12px;
        }

        .elemento-capa-desc button:hover {
            background-color: #ED6b86;
            cursor: pointer;
        }

        .elemento-container-descricao{
            flex: 1 1 300px;
            width: 50%;
            /* max-width: 350px; */
            height: 50%; /* Altura */
            /* word-wrap: break-word; */
            /* margin-top: 5px; */
            /* margin-right: 5%; */
            background-color: white; /* Cor de fundo */
            border: 1px solid white; /* cor da borda */
            border-radius: 12px;
            text-align: justify;
        }

        .flex-servicos {
            display: flex;
            flex-wrap: wrap;
            max-width: 800px;
            /* margin: 0 auto; */
            /* align-items: center; */
            /* justify-content: center; */
            text-align: center;
        
        }

        .card-servico {
            flex: 1 1 200px;
            margin: 3em;
        }

        .title-servico {
            text-align: left;
        }

        .corpo-servico {
            text-align: justify;
        }


        .card-servico button {
            background-color: #424247;
            height: 2em;
            border: none;
            /* padding: 2%; */
            width: 75%;
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 12px;
        }

        .card-servico button:hover {
            background-color: #ED6b86;
            cursor: pointer;
        }

        /* CAMPANHA DE FINANCIAMENTO */

        .campanha-cabecalho {
            flex: 1 1 200px;
            height: auto;
            /* margin: 0em 0em; */
        }

        .flex-campanha {
            display: flex;
            flex-wrap: wrap;
            max-width: 100%;
            text-align: center;
            justify-content: center;
            /* align-items: center; */
            border: 2px solid #7e6345;
            border-radius: 24px;
        }

        .flex-campanha h1 {
            font-family:'Aesthetic';
            font-size: clamp(1rem, 1.5vw + 1rem, 6rem);
            /* text-align: center; */
        }

        .flex-campanha h2 {
            font-family: 'Quicksand', sans-serif;
            font-size: clamp(1rem, 1.5vw + 1rem, 6rem);
            font-weight: lighter;
            letter-spacing: 9.3px; 
            /* text-align: center; */
        }

        .flex-campanha h3 {
            font-size: clamp(1rem, 1.5vw + 1rem, 6rem);
            /* text-align: center; */
        }

        .flex-campanha p {
            font-size: clamp(1rem, 0.5vw + 1rem, 4rem);
            text-align: justify;
        }

        .flex-campanha button {
            background-color: #424247;
            height: 2em;
            border: none;
            /* padding: 2%; */
            width: 12em;
            color: #fff;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 12px;
        }

        .flex-campanha button:hover {
            background-color: #ED6b86;
            cursor: pointer;
        }

        .card-campanha-inicio {
            flex: 1 1 200px;
            margin: 3em;
        }

        .card-campanha-inicio button {
            background-color: #424247;
            height: 3em;
            border: none;
            /* padding: 2%; */
            width: 12em;
            color: #fff;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 12px;
        }

        .card-campanha-inicio button:hover {
            background-color: #ED6b86;
            cursor: pointer;
        }

        .descricao-group {
            flex: 1 1 200px;
            margin: 0.5em;
            padding: 2%;
            
        }

        .recompensas-group {
            flex: 1 1 200px;
            margin: 0.5em;
            /* border: 2px solid #7e6345;
            border-radius: 24px; */
            justify-content: center;
            max-width: 450px;
        }

        .recompensa {
            flex: 1 1 200px;
            padding: 2%;
            margin: 0.2em;
            border: 2px solid #7e6345;
            border-radius: 24px;
            margin-bottom: 15px;
        }

        .recompensa img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            font-size: small;
            width: 100%;
            /* line-height: 16px; */
            /* background-color: #333; */
            color: #333;
        }

        footer p {
            word-wrap: break-word;
            margin-bottom: 3px;
        }

    </style>

    <title>@yield('title')</title>

</head>

<body>

    <div>
        <!-- header é o cabeçalho do projeto e está em layouts/navigation -->
        @include('layouts.navigation')

        <!-- Page Content -->
        @yield('main')
    </div>

    <br>
    <br>
    <br>
    <footer class="footer">
        <br>
        <br>
        <br>
        <p>&copy; 2026 Villa Diodati - Coletivo de Autores. Todos os direitos reservados.</p>

        <p>Contato: villadiodaticoletivo@gmail.com</p>

        <p>Desenvolvido por <a href="https://wa.me/5567996638417?text=Olá,%20gostaria%20de%20mais%20informações%20sobre%20contrução%20de%20um%20site.">Zephyro</a> com Laravel</p>

        <!-- <a href="/politica-de-privacidade">Política de Privacidade</a> -->
    </footer>  

</body>
</html>
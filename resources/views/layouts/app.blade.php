<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{ Storage::url('images/favicon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');

        body{
            /* font-family: Georgia, 'Times New Roman', Times, serif; */
            font-family: 'Quicksand', sans-serif;
            margin: 0;
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

        /* Cabeçalho da logo e redes sociais */

        header{
            /* margin-top: 200px; */
            width: 100%;
            background-color: #424147;
        }

        .top-header > .interface{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .top-header{
            background-color: #fff;
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

        /* cabeçalho dos menus */

        .botton-header nav ul{
            display: flex;
            align-items: center;
            justify-content: center;
            list-style-type: none;
        }

        .botton-header nav ul li a{
            color: #fff;
            padding: 20px 40px;
            text-decoration: none;
            font-weight: 600;
            display: block;
            transition: .2s;
        }

        .botton-header nav ul li a:hover{
            background-color: #ED6b86;   
            color: #424247;
            box-shadow: inset 0 0 8px #000;
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

        .recuo {
            margin-left: 50px;
            width: 620px;
            line-height: 35px;
            align-items: center;
        }

        .text-centralizado {
            font-size: 20px;
            padding: 10px 15%;
            line-height: 35px;
            /* align-items: center; Centers vertically */
            justify-content: center; /* Centers horizontally */
        }

        .text-centralizado h1 {
            font-family:'Aesthetic';
            font-size: 110px;
            text-align:center;
        }

        .text-centralizado h2 {
            font-family: 'Quicksand', sans-serif;
            font-size: 60px;
            font-weight: lighter;
            letter-spacing: 9.3px; 
            text-align:center;
        }

        .text-centralizado h3 {
            text-align: center;
        }

        .text-centralizado p {
            text-align: justify;
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
            display: flex; /* Coloca as filhas lado a lado */
            gap: 30px;      /* Espaço entre as divs */
            align-items: center;
            justify-content: center;
        }

        .container button {
            font-size: 30px;
            background-color: #424247;
            height: 55px;
            width: 130%;
            border: none;
            color: #fff;
            /* font-size: 1rem; */
            font-weight: bold;
            border-radius: 12px;
        }

        .container button:hover {
            background-color: #ED6b86;
            cursor: pointer;
        }

        .items1 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 30px;
        }

        .items2 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 30px;
        }

        .item {
            text-align: center;
            background-color: #e6dede;
            padding: 10px;
            /* width: 190px; */
            /* height: 390px; */
            display: flex;
            flex-direction: column;
            position: relative;
            border-radius: 12px;
            box-shadow: 4px 4px 16px #aaaa;
            justify-content: center;
            align-items: center;

        }

        /* capa */
        .produto {
            text-align: center;
            height: 220px;
            width: 100%;
            border-radius: 5px;
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

        .item button {
            background-color: #424247;
            height: 30px;
            border: none;
            padding: 3px;
            width: 80%;
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
            gap: 30px; /* espaço entre divs */
            padding: 10px; /* distancia da borda da pagina */
            flex-direction: row; /* alinhar divs em linha*/
            
        }

        .elemento-container-capa{
            width: 350px; /* Largura */
            height: 100%; /* Altura */
            margin-top: 50px;
            display: flex;
            justify-content: center;
            background-color: white; /* Cor de fundo */
            border: 1px solid white; /* cor da borda */
            border-radius: 12px;
            flex-direction: column; /* alinhar divs em linha*/
        }

        .elemento-capa {
            text-align: center;
            margin-top: 5px;            
        }

        .elemento-capa-desc {
            text-align: center;
            border-radius: 5px;
            padding: 5px;
            margin-top: 5px; 
        }

        .elemento-capa img{
            width: 90%; /* Largura */
            box-shadow: 4px 4px 16px #aaaa;
        }

        .elemento-capa-desc h1 {
            font-size: 1.4rem;
            margin-top: 5px; 
        }

        .elemento-capa-desc h2 {
            font-size:1rem;
            color: #242121aa;
            margin-top: 5px;
        }

        .elemento-capa-desc button {
            background-color: #424247;
            height: 30px;
            border: none;
            padding: 3px;
            width: 80%;
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 12px;
        }

        .elemento-capa-desc button:hover {
            background-color: #ED6b86;
            cursor: pointer;
        }

        .elemento-container-descricao{
            width: 500px; /* Largura */
            height: 50%; /* Altura */
            margin-top: 50px;
            background-color: white; /* Cor de fundo */
            border: 1px solid white; /* cor da borda */
            border-radius: 12px;
            text-align: justify;
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
    

  

</body>
</html>
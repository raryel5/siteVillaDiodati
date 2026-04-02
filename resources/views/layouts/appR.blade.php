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
            /* width: 100%; */
            background-color: #424147;
            position: relative;
            width: 1220px;
            max-width: 90%;
            height: 120px;
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

        .recuo {
            margin-left: 50px;
            width: 620px;
            line-height: 35px;
            align-items: center;
        }

        .container-caixa {
            display: flex;
            justify-content: left;
            margin-top: 50px;
            margin-left: 50px;
        }
        .minha-caixa {
            padding: 10px 10px;
            border: 2px #fff;
            border-radius: 5px;
            width: 400px;
            height: 400px;
        }

        /* Configurações de tabelas */

        .tablePosition {
            justify-content: center;
            margin-top: 50px;
            margin-left: 50px;
        }

    </style>

    <title>@yield('title')</title>

</head>

<body>

    <div>
        <!-- header é o cabeçalho do projeto e está em layouts/navigation -->
        @include('layouts.navigationR')

        <!-- Page Content -->
        @yield('main')

    </div>
    

  

</body>
</html>
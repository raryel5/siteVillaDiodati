<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o Coletivo Villa Diodati

O Coletivo de Autores Villa Diodati é um grupo de escritores que reuniu-se, inicialmente, com o intuito de estabelecer uma rede de colaboração entre escritores independentes na divulgação de seus trabalhos. O projeto deu muito certo e gerou uma excelente interação entre os componentes, fazendo com que ideias afluíssem em cada um dos participantes, dia após dia.

Em dado momento percebeu-se que precisavam de um nome para essa junção de afinidades e de sonhos em comum. Foi aí que criaram o selo editorial que os definiria a partir de então: Coletivo de Autores Villa Diodati. O nome foi escolhido em homenagem à histórica reunião dos escritores Lord Byron, Mary Shelley, John Polidori e Percy Shelley, ocorrida no verão de 1816, à beira do Lago Léman, em Genebra.

# Download do repositório

Quando baixar o repositório noutro computador, será necessário rodar de novo o composer instalar para que ele encontre o caminho dos executáveis do PHP e MySQL:

```php
composer install
```

A chave de encriptação fica em .env e é necessária quando se baixa o repositório do site noutro computador. Para gerar ela rode o comando:

```php
php artisan key:generate
```
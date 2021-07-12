
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

    cp .env.example .env
    docker-compose up
    docker exec just_good_joke composer install 
    docker exec just_good_joke php artisan key:generate 
    docker exec just_good_joke php artisan migrate
    docker exec just_good_joke php artisan db:seed

# just-good-joke

Prova Técnica
Pessoa Desenvolvedora Full Stack

O desafio
Você deverá construir a plataforma "Só piada boa", que é capaz de realizar o registro
de piadas e classificá-las.

O escopo da plataforma consiste em:

● Um usuário pode criar uma piada

    ○ Uma piada contém algumas informações do usuário que a registrou,
como nome e e-mail e, também a descrição da piada

● Um usuário tem acesso a uma lista de piadas, onde TODAS as piadas são
listadas

    ○ A listagem contém dois filtros: um filtro de ordenação (por data) e um
campo de autocomplete

● Ao clicar em uma piada na listagem, os detalhes da piada serão mostrados em
um modal que conterá alguns dados sobre a piada e ações para "like" e "deslike"
da piada

Teste prático feito durante uma viagem utilizando aproximadamente 9 horas do final de semana

O foco principal foi atender os requisitos da implementação

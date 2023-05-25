<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\{CPF, Endereco};
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();


$umDiretor = new Diretor(
    'José Antônio',
    new CPF('123.456.789-10'),
    10000
);

$umGerente = new Gerente(
    'Alex Silva',
    new CPF('567.985.741-00'),
    8000
);

$umTitular = new Titular(
    'Maria Joaquina',
    new CPF('456.789.123-00'),
    new Endereco('Salvador', 'Centro', 'B', '10')
);


//Teste de autenticação. Substitua a variável para testar o código em cada tipo de usuário autenticável:

$autenticador->tentaLogin($umDiretor, '1234');
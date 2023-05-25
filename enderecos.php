<?php

// Teste métodos mágicos:

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$enderecoQualquer = new Endereco(
    'Porto Seguro',
    'Taperapuã',
    'Rua dos Ipês',
    '00'
);

// método __toString():
echo $enderecoQualquer . PHP_EOL;

// método __get():
echo $enderecoQualquer->bairro . PHP_EOL;

// método __set():
echo $enderecoQualquer->cidade = 'São Paulo' . PHP_EOL;
echo $enderecoQualquer;

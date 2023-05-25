<?php
// Teste método mágico __toString

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$enderecoQualquer = new Endereco(
    'Porto Seguro',
    'Taperapuã',
    'Rua dos Ipês',
    '00'
);

echo $enderecoQualquer;
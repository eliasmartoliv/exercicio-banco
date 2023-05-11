<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco ('Porto Seguro', 'Centro', 'A', '10');
//$elias = new Titular;
//$primeiraConta = new Conta ($elias);

echo (Conta::recuperaNumeroDeContas()) . PHP_EOL;
//var_dump($primeiraConta);
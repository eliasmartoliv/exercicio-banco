<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{Endereco, CPF};

$primeiraConta = new \Alura\Banco\Modelo\Conta\ContaCorrente(
    titular: new Titular('Marcos Santos',
    cpf: new CPF( '999.999.999-99'),
    endereco: new Endereco('Belo Horizonte', 'Centro', 'C', '20')
    )
);

$segundaConta = new \Alura\Banco\Modelo\Conta\ContaPoupanca(
    titular: new Titular('Luiza Carvalho',
    cpf: new CPF('111.111.111-11'),
    endereco: new Endereco('Itacaré', 'Bela Vista', 'Rua','0')
    )
);

//Mostra quantidade de contas criadas:
echo (Conta::recuperaNumeroDeContas()) . PHP_EOL;

//Debug da conta criada:
var_dump($primeiraConta) .PHP_EOL;
var_dump($segundaConta) . PHP_EOL;

//Teste de depósito, saque e tarifa:

echo $primeiraConta->percentualTarifa() .PHP_EOL;
echo $segundaConta->percentualTarifa() . PHP_EOL;

$primeiraConta->deposita(1000);
$primeiraConta->saca(100);

$segundaConta->deposita(1000);
$segundaConta->saca(100);

echo $primeiraConta->recuperaSaldo() .PHP_EOL;
echo $segundaConta->recuperaSaldo() .PHP_EOL;

<?php

require 'Conta.php';
require 'Titular.php';
require 'CPF.php';

$primeiraConta = new Conta (new Titular(new CPF('123.456.789-10'),'Elias Oliveira'));

echo (Conta::recuperaNumeroDeContas()) . PHP_EOL;
var_dump($primeiraConta);
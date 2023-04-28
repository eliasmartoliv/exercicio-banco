<?php

spl_autoload_register(function (string $nomeCompletoDaClasse){
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\',DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;


$endereco = new Endereco('Sao Paulo', 'Centro', 'Rua A', '10');
$elias = new Titular(new CPF('123.456.789-10'), 'Elias Oliveira', $endereco);
$primeiraConta = new Conta ($elias);

echo (Conta::recuperaNumeroDeContas()) . PHP_EOL;
var_dump($primeiraConta);
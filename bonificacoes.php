<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, EditorVideo, Gerente, Desenvolvedor};

$umFuncionario = new Desenvolvedor(
    'Lucas Oliveira',
    new CPF('123.456.789-10'),
    20000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Roberto Campos',
    new CPF('987.654.321-10'),
    30000
);

$umDiretor = new Diretor(
    'Paulo Martins',
    new CPF('123.951.789-11'),
    50000
);

$umEditor = new EditorVideo(
    'Hikaro Medeiros',
    new CPF('456.987.231-11'),
    10500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
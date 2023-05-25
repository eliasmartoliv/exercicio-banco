<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    public function __construct(
        protected string $nome,
        CPF $cpf,
        private float $salario
    ) {
        parent::__construct($nome, $cpf);
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Aumento de salário precisa ser positivo.";
            return;
        }
        $this->salario += $valorAumento;
    }

    abstract public function calculaBonificacao(): float;
}
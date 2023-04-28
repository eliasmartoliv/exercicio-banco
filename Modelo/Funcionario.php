<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    public function __construct(
        private string $cargo
    ) {
        parent::__construct($nome, $cpf);
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

}
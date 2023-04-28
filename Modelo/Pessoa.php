<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    public function __construct(
        protected string $nome,
        private CPF $cpf,
    ) {
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
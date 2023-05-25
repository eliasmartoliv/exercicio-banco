<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;
use ALura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Autenticavel;

class Titular extends Pessoa implements Autenticavel
{
    public function __construct(
        protected string $nome,
        CPF $cpf,
        private Endereco $endereco
    ) {
        parent::__construct($nome, $cpf);
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
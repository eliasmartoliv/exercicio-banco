<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use ALura\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    public function __construct(
        private Endereco $endereco
    ) {
        parent::__construct($nome, $cpf);
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

}
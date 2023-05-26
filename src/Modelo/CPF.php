<?php

namespace Alura\Banco\Modelo;

final class CPF
{
    public function __construct(
        private string $numero
    ) {
    }
    public function recuperaNumero() : string
    {
        return $this->numero;
    }
}
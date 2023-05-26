<?php

namespace Alura\Banco\Modelo;

trait AcessoAtributos
{
    public function __get(string $nomeAtributo): string
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}
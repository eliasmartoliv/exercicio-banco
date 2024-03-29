<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    public function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo){
            echo 'Saldo insuficiente';
            return;
        }
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

}


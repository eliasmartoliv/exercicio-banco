<?php

class Conta
{
    private static $numeroDeContas = 0;
    public function __construct(
        private Titular $titular,
        private float $saldo = 0,
    ){
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo 'saldo insuficiente';
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo 'valor precisa ser positivo';
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino) :void
    {
        if ($valorATransferir > $this->saldo){
            echo 'Saldo insuficiente';
            return;
        }
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaTitular() : string
    {
        return "{$this->titular->recuperaCpfTitular()} {$this->titular->recuperaNomeTitular()}";

    }

    public static function recuperaNumeroDeContas () : int
    {
        return self::$numeroDeContas;
    }
}


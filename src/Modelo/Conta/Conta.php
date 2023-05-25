<?php

namespace Alura\Banco\Modelo\Conta;
abstract class Conta
{
    private static $numeroDeContas = 0;
    public function __construct(
        private Titular $titular,
        protected float $saldo = 0,
    ){
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo){
            echo "Saldo insuficiente";
            return;
        }
        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo 'valor precisa ser positivo';
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaTitular(): string
    {
        return "{$this->titular->recuperaCpf()} {$this->titular->recuperaNome()}";

    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract public function percentualTarifa(): float;

}


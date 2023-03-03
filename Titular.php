<?php
class Titular
{
    public function __construct(
        private CPF            $cpf,
        public readonly string $nomeTitular,
    ){
    }
    public function recuperaCpfTitular(): string
    {
        return $this->cpf->recuperaNumero();
    }
    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }

}
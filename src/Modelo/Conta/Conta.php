<?php

namespace Alura\Banco\Modelo\Conta;


abstract class Conta
{
    private $titular;
    protected float $saldo;
    protected string $endereco;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
    }


    // Getters
    public function getTitular(): string
    {
        return $this->titular;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function sacarSaldo(float $valorASacar) : void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo){
            echo "Saldo indisponível para saque. Verifique o saldo da sua conta e tente novamente" . PHP_EOL;
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositarSaldo(float $valorADepositar) : void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    abstract protected function percentualTarifa(): float;

}
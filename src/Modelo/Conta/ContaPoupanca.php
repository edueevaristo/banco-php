<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{

    protected function percentualTarifa(): float
    {
        return 0.07;
    }

    public function depositarSaldo(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo para que seja feito o depósito, tente novamente";
            return;
        }

        $this->saldo += $valorADepositar;
    }
}
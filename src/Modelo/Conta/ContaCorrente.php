<?php

namespace Alura\Banco\Modelo\Conta;


class ContaCorrente extends Conta
{

    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transferirSaldo(float $valorATransferir, Conta $contaDestino) : void
    {
        if ($valorATransferir > $this->getSaldo()) {
            echo "Saldo indisponível para transferência, verifique o seu saldo e tente novamente.";
            return;
        }

        $this->sacarSaldo($valorATransferir);
        $contaDestino->depositarSaldo($valorATransferir);
    }
}
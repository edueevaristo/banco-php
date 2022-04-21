<?php

namespace Alura\Banco\Services;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControleBonificacoes
{

    private float $totalBonificacao = 0;

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacao += $funcionario->calcularBonificacao();
    }

    public function getTotal(): float
    {
        return $this->totalBonificacao;
    }

}
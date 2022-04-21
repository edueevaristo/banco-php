<?php


namespace Alura\Banco\Modelo\Funcionario;


class Empregada extends Funcionario
{

    public function calcularBonificacao(): float
    {
        return 100.0;
    }
}
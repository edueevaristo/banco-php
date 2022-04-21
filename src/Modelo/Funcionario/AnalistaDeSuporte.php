<?php


namespace Alura\Banco\Modelo\Funcionario;


class AnalistaDeSuporte extends Funcionario
{

    public function calcularBonificacao(): float
    {
        return 400.0;
    }
}
<?php


namespace Alura\Banco\Modelo\Funcionario;


class SocialMedia extends Funcionario
{
    public function calcularBonificacao(): float
    {
        return 100.0;
    }
}
<?php


namespace Alura\Banco\Modelo\Funcionario;


class Diretor extends Funcionario
{

    //Gerente ganhará 3x o valor de seu salário como bonificação.
    public function calcularBonificacao(): float
    {
        return $this->getSalario() * 3;
    }
}
<?php

/*
 * Desenvolvedor receberá a bonificação de 500 reais;
 * Desenvolvedor a partir de seu nível, passará a ganhar aumento, onde é instaciado o recebeAumento que está na class Funcionario
 * e assim, é instaciado o getSalario e passando o valor como multiplicação.
 *
 */
namespace Alura\Banco\Modelo\Funcionario;


class Desenvolvedor extends Funcionario
{

    public function junior()
    {
        $this->recebeAumento($this->getSalario() * 0.30);
    }

    public function senior()
    {
        $this->recebeAumento($this->getSalario() * 3.00);
    }

    public function pleno()
    {
        $this->recebeAumento($this->getSalario() * 10.00);
    }

    public function calcularBonificacao(): float
    {
        return 500.0;
    }
}
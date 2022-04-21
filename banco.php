<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';


//Teste Endereço
$endereco = new Endereco(
    'São Paulo',
    'Jardim Brasil',
    'Rua Eleonor Sampaio',
    '786-A',
    '11999-989',
    '(14)99999-9999',
    'Fim de Rua'
);

$endereco2 = new Endereco(
    'Petrópolis',
    'Jardim Brasil',
    'Mundo Novo',
    '785-H',
    '17505-180',
    '(14)99799-9999',
    'Fim de Curso',
);




//Teste de conta corrente
$contaEdu = new ContaCorrente(
    new Titular(
        new CPF('098.970.999-99'),
        'Eduardo Evaristo Gomes da Silva',
        $endereco
    )
);


//Teste de conta poupança
$contaPEdu = new ContaPoupanca(
    new Titular(
        new CPF('999.170.999-65'),
        'Geovana Helen de Brito',
        $endereco2
    )
);


//Outra forma de cadastro da conta corrente ou poupança
$endereco1 = new Endereco('Marília','Jardim do Teste', 'Rua Teste de Abri', '899-B', '17895-895', '(14)99999-6666', 'Final da Rua');
$maria = new Titular(new CPF('123.456.789-10'), 'Maria Regina', $endereco1);
$terceiraConta = new ContaPoupanca($maria);




// Métodos de depósito na conta corrente e poupança para teste
$contaEdu->depositarSaldo(5000);
$contaPEdu->depositarSaldo(6000);


// Métodos de transferência, somente para a conta corrente, seguindo a regra de negócio
$contaEdu->transferirSaldo(600, $contaPEdu);



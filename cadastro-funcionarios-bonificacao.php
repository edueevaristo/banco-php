<?php
use Alura\Banco\Services\ControleBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{AnalistaDeSuporte, Desenvolvedor, Diretor, Empregada, Gerente, SocialMedia};

require_once 'autoload.php';



/*
 * CADASTRO DOS FUNCIONÁRIOS, TESTANDO
 */
$funcionarioEduardoDevJunior = new Desenvolvedor(
  'Eduardo Evaristo',
    new CPF('499.123.456-89'),
    3000
);

$funcionariaGeovana = new Gerente(
    'Geovana Helen',
    new CPF('999.888.777-66'),
    10000
);

$funcionariaMaria = new Empregada(
    'Maria Eduarda',
    new CPF('123.456.789-20'),
  1400
);

$funcionarioEdson = new Diretor(
    'Edson Gomes',
    new CPF('789.456.999-99'),
    45000
);

$funcionarioVictor = new SocialMedia(
    'Victor Teste',
    new CPF('111.222.333-44'),
    2000
);

$funcionarioJovem = new AnalistaDeSuporte(
    'Jovem da Silva',
    new CPF('123.456.789-10'),
    1800
);

//$controlador = new ControleBonificacoes();
//$controlador->adicionaBonificacao($funcionariaGeovana);
//
//
//echo $controlador->getTotal();
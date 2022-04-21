<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';


$eduardo = new Endereco(
    'Marília',
    'Jardim Eldorado',
    'Zachias Zugaib',
    '1070',
    '17505-180',
    '(14)99799-1111',
    'Fim de Rua',
);

$geovana = new Endereco(
    'Marília',
    'Pólon',
    'Rua Testes',
    '25',
    '17507-070',
    '(14)98585-9990',
    'Frente a um teste'
);

$emprego = new Endereco(
    'Marília',
    'Santa Teste',
    'Av. Santo Teste',
    '3636',
    '17507-220',
    '(14)2105-0022',
    'Próximo a padaria de Teste'
);



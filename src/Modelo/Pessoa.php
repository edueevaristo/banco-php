<?php


namespace Alura\Banco\Modelo;


class Pessoa
{
    protected string $nome;
    private $cpf;


    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCPF(): string
    {
        return $this->cpf->getNumero();
    }

    public function validarNomeTitular(string $nomeTitular)
    {
        if ($nomeTitular < 5){
            echo "O nome do titular da conta precisa ter no mínimo 5 caracteres";
            die();
        }
    }
}
<?php

namespace Alura\Banco\Modelo;

class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;
    private string $cep;
    private string $telefone;
    private string $referencia;


    public function __construct(string $cidade, string $bairro, string $rua, string $numero, string $cep,string $telefone, string $referencia)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->cep = $cep;
        $this->telefone = $telefone;
        $this->referencia = $referencia;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function getReferencia(): string
    {
        return $this->referencia;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }


}
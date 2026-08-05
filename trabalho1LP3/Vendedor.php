<?php
require_once 'Pessoa.php';
require_once 'Data.php';
class Vendedor extends Pessoa

{
    private float $salario;
    private float $comissao;

    public function __construct(string $nome, string $cpf, string $sexo, Data $dataNascimento, float $salario, float $comissao)
    {
        parent::__construct($nome, $cpf, $sexo, $dataNascimento);
        $this->salario = $salario;
        $this->comissao = $comissao;
    }
    public function getSalario(): float
    {
        return $this->salario;
    }
    public function getComissao(): float
    {
        return $this->comissao;
    }
    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }   
    public function setComissao(float $comissao): void
    {
        $this->comissao = $comissao;
    }
    public function imprimir(){
        parent::imprimir();
        echo "Salário: " . $this->getSalario() . "<br>";
        echo "Comissão: " . $this->getComissao() . "<br>";
    }
}
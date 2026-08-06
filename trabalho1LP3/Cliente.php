<?php
require_once 'Pessoa.php';
require_once 'Data.php';
class Cliente extends Pessoa
{
    private int $dataCadastro;
    private string $preferencias;
    

    public function __construct(string $nome, string $cpf, string $sexo, Data $dataNascimento, int $dataCadastro, string $preferencias)
    {
        parent::__construct($nome, $cpf, $sexo, $dataNascimento);
        $this->dataCadastro = $dataCadastro;
        $this->preferencias = $preferencias;

    }
    public function getDataCadastro(): int
    {
        return $this->dataCadastro;
    }   
    public function getPreferencias(): string
    {
        return $this->preferencias;
    }
    public function setDataCadastro(int $dataCadastro): void
    {
        $this->dataCadastro = $dataCadastro;
    }
    public function setPreferencias(string $preferencias): void
    {
        $this->preferencias = $preferencias;
    }
    public function imprimir(){
        parent::imprimir();
        echo "Data de Cadastro: " . $this->getDataCadastro() . "<br>";
        echo "Preferências: " . $this->getPreferencias() . "<br>";
    }
}
<?php
abstract class Pessoa 
{
    private string $nome;
    private string $cpf;
    private string $sexo; /* medoto set deve ser para impedir mais de 1 caractere */
    private DateTime $dataNascimento;

    public function __construct(string $nome, string $cpf, string $sexo, DateTime $dataNascimento)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->dataNascimento = $dataNascimento;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getCpf(): string
    {
        return $this->cpf;
    }
    public function getSexo(): string
    {
        return $this->sexo;
    }
    public function getDataNascimento(): DateTime
    {
        return $this->dataNascimento;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }
    public function setSexo(string $sexo): void
    {
        if (strlen($sexo) === 1) { /* a função 'strlen' é uma função que conta a quantidade de caracters da string e sempre retorna inteiro */
            $this->sexo = $sexo;
        } else {
            throw new InvalidArgumentException("O sexo deve ser um único caractere.");
        }
    }
    public function setDataNascimento(DateTime $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }
}

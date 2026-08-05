<?php
class Pedido
{
    private int $data;
    private string $listaIntens;
    private string $cliente;
    private string $vendedor;
    private float $valorTotal;

    public function __construct(int $data, string $listaIntens, string $cliente, string $vendedor, float $valorTotal)
    {
        $this->data = $data;
        $this->listaIntens = $listaIntens;
        $this->cliente = $cliente;
        $this->vendedor = $vendedor;
        $this->valorTotal = $valorTotal;
    }
    public function getData(): int
    {
        return $this->data;
    }   
    public function getListaIntens(): string
    {
        return $this->listaIntens;
    }
    public function getCliente(): string
    {
        return $this->cliente;
    }
    public function getVendedor(): string
    {
        return $this->vendedor;
    }
    public function getValorTotal(): float
    {
        return $this->valorTotal;
    }
    public function setData(int $data): void
    {
        $this->data = $data;
    }
    public function setListaIntens(string $listaIntens): void
    {
        $this->listaIntens = $listaIntens;
    }
    public function setCliente(string $cliente): void
    {
        $this->cliente = $cliente;
    }   
    public function setVendedor(string $vendedor): void
    {
        $this->vendedor = $vendedor;
    }   
    public function setValorTotal(float $valorTotal): void
    {
        $this->valorTotal = $valorTotal;
    }
    public function adicionarItem(string $item): void
    {
        $this->listaIntens .= $item . ', ';
    }
    public function 
}
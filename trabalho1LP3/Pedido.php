<?php 
    require_once "itemPedido.php"

    class Pedido {
 
    private DateTime $data;
    private array $listaItens = [];
    private Cliente $cliente;
    private Vendedor $vendedor;
    private float $valorTotal;
    
    public function __construct(dateTime $data, Cliente $cliente, Vendedor $vendedor, float $valorTotal) {
        $this->data = $data;
        $this->cliente = $cliente;
        $this->vendedor = $vendedor;
        $this->listaItens = [];
        $this->valorTotal = $valorTotal;
    }
     public function getData() {
        return $this->data;
    }

    public function setData(DateTime $data) {
        $this->data = $data;
    }

    public function getListaItens() {
        return $this->listaItens;
    }

    public function setListaItens(array $listaItens){
        $this->listaItens = $listaItens;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function setCliente(Cliente $cliente){
        $this->cliente = $cliente;
    }

    public function getVendedor() {
        return $this->vendedor;
    }

    public function setVendedor(Vendedor $vendedor) {
        $this->vendedor = $vendedor;
    }

    public function getValorTotal() {
        return $this->valorTotal;
    }

    public function setValorTotal(float $valorTotal) {
        $this->valorTotal = $valorTotal;
    }
}
    public function adicionarItem(ItemPedido $item) {
        $this->listaItens[] = $item;
       
    }
 private funciton calcularValorTotal() {
    total = 0;
    foreach ($this->listaItens as $item) {
        $total += $item->getValor();
    }
    return $total;
 }
 private adicionarComissao(float $comissao) {
    $desconto = $this->valorTotal * ($comissao / 100);
    $this->valorTotal -= $desconto;
 }
 public funciton fecharPedido() {
       $this->valorTotal = $this->calcularValorTotal();
        $this->valorTotal += $this->adicionarComissao();
 }


    public function imprimirPedidoCompleto(){
    echo "Data: " . $this->data->format('Y-m-d') . "\n";
    echo "Cliente: " . $this->cliente->getNome() . "\n";
    echo "Vendedor: " . $this->vendedor->getNome() . "\n";
    echo "Itens:\n";
    foreach ($this->listaItens as $item) {
        echo "- " . $item->getProduto()->getNome() . ": " . $item->getQuantidade() . " x " . $item->getValor() . "\n";
    }
    echo "Valor Total: " . $this->valorTotal . "\n";
}







































?>

<?php 
require_once "Produto.php";

class ItemPedido{
    private Produto $item;
    private int $quantidade;
    private float $valor;

    public function __construct(Produto $item, int $quantidade, float $valor)
    {
        $this->item=$item;
        $this->quantidade=$quantidade;
        $this->valor=$valor;
        
    }

    /**
     * Get the value of item
     */ 
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set the value of item
     *
     * @return  self
     */ 
    public function setItem(Produto $item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get the value of quantidade
     */ 
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     *
     * @return  self
     */ 
    public function setQuantidade(int $quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of valor
     */ 
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */ 
    public function setValor(float $valor)
    {
        $this->valor = $valor;

        return $this;
    }
}
?>
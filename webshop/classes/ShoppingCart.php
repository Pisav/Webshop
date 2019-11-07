<?php
class ShoppingCart
{
    private $products;
    public function __construct()
    {
        $this->products = [];
    }

    /**
     * @param $product
     */
    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    /**
     * @param $index
     */
    public function removeItem($position)
    {
        array_splice($this->products, $position, 1);
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }
    
    public function hasProducts()
    {
        return !empty($this->products);
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->products as $product):
            $total += $product->getPrice();
        endforeach;
        return $total;
    }


}
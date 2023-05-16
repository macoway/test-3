<?php

namespace Roman\Test3;

class Shop {
    private string $name;
    private string $address;
    private array $products = [];

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function removeProduct(Product $product): void
    {
        $index = array_search($product, $this->products);
        if (false !== $index) {
            array_splice($this->products, $index, 1);
        }
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}
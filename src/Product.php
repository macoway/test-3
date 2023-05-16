<?php

namespace Roman\Test3;

class Product
{
    private string $name;
    private float $price;

    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function __toString(): string
    {
        return implode(" - ", [
            $this->name,
            $this->price . '$',
        ]);
    }

}
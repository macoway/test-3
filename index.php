<?php
require_once 'vendor/autoload.php';
use Roman\Test3\Shop;
use Roman\Test3\Product;

$shop = new Shop("Назва магазину", "Адреса магазину");

$product1 = new Product("Товар 1", 23.5);
$product2 = new Product("Товар 2", 5);
$product3 = new Product("Товар 3", 110.25);

// Додавання товарів до магазину
$shop->addProduct($product1);
$shop->addProduct($product2);
$shop->addProduct($product3);

// Видалення одного з товарів
$shop->removeProduct($product2);

// Виведення списку всіх товарів
$products = $shop->getProducts();
foreach ($products as $product) {
    echo $product . "<br>";
}

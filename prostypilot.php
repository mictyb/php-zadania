<?php


function basket(string $productName, float $price, int $quantity): void {


$totalPrice = $price * $quantity;
echo 'Nazwa produktu: ' .$productName .', cena : ' .$price .'zl';
echo ' <br> cena calkowita za produkty wynosi ' .$totalPrice .'zl';

}
$totalPrice = 0;
$productName = 'jaja 10 sztuk';
$price = 12.50;
$quantity = 3;


echo basket($productName,$price,$quantity);

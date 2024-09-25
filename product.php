<?php

class Product
{
    public string $title;
    public float $price;
    public int $quantity;
    public float $total;

    public function totalPrice ()
    {
        //calculer mon prix x par la quantité
        return $this->total = $this->price * $this->quantity;
    }
}

$commode = new Product();
$commode->title = 'Commodes en bois';
$commode->price = 5000;
$commode->quantity = 10;
$commode->totalPrice();

echo '<p>Les '. $commode->title . ' coûte au total : '. $commode->total .'€</p>';

$chaise = new Product();
$chaise->title = "Chaises en bois";
$chaise->price = 20;
$chaise->quantity = 5;
$chaise->totalPrice();

echo '<p>Les '. $chaise->title . ' coûte au total : '. $chaise->total .'€</p>';





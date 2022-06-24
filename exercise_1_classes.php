<?php
declare(strict_types=1); // <<< DON'T FORGET THIS :D

// class template
class Beverage {

    // The Properties
private string $color; //type declaration to "string"
private float $price;
private string $temperature = "cold";  //this is to set a default

    // The Constructor with incoming parameters in the brackets
    
    private function __construct($color, $price, $temperature)
    
    {
    // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
    $this->color = $color;
    $this->price = $price;
    $this->temperature = $temperature;
    }

    // The functions
    private function getInfo() : void
    {
        echo "This beverage is $this->color and $this->temperature";
    }
}

$sprite = new beverage("yellow", 1.40, "cold");
$cola = new beverage("black", 2, "cold");
$pepsi = new beverage("black", 1.80, "cold");
$freewayCola = new beverage("black", 0.65, "cold");
$riverCola = new beverage("black", 0.65, "cold");

$cola->getInfo();
$pepsi->getInfo();
$freewayCola->getInfo();




?>
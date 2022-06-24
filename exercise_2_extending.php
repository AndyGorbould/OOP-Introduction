<?php

declare(strict_types=1); // <<< DON'T FORGET THIS :D


// class template
class Beverage
{

    // The Properties
    public string $color; //type declaration to "string"
    public float $price;
    public string $temperature = "cold";  //this is to set a default
    // The Constructor with incoming parameters in the brackets
    public function __construct($color, $price, $temperature)
    {
        // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    // The functions
    public function getInfo(): void
    {
        echo "This beverage is $this->color and $this->temperature";
    }
}

// make some Beverages>>
$sprite = new Beverage("yellow", 1.40, "cold");
$cola = new Beverage("black", 2, "cold");
$pepsi = new Beverage("black", 1.80, "cold");
$freewayCola = new Beverage("black", 0.65, "cold");
$riverCola = new Beverage("black", 0.65, "cold");


class Beer extends Beverage
{
    public string $name;
    public float $alcoholPercentage;

    // Constructor
    public function __construct(string $color, float $price, string $name, float $alcoholPercentage)

    {
        $this->color = $color;
        $this->price = $price;
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    // The functions
    public function getAlcoholPercentage(): float
    {
        // $this->alcoholPercentage = $catchMe;
        return $this->alcoholPercentage;
    }

}
$cara = new Beer("yellowish", 0.60, "Carapils", 4.4);
$duvel = new Beer("biercleur", 3.50, "Duvel", 8.5);

echo $duvel->getAlcoholPercentage(); // using the class method, which contains a method with return ($ITEM->METHOD)
echo "</br>";
echo $duvel->alcoholPercentage;  // access the PROPERTY ($ITEM->PROPERTY)
echo "</br>";
echo $duvel->color;
echo "</br>";
$duvel->getInfo();
?>
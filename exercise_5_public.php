<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/


// class template
class Beverage {

    // The Properties
private string $color; //type declaration to "string"
private float $price;
private string $temperature;  //this is to set a default

    // The Constructor with incoming parameters in the brackets
    
    public function __construct($color, $price)
    
    {
    // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
    $this->color = $color;
    $this->price = $price;
    $this->temperature = "cold";
    }

    // The functions
    public function getInfo() : void
    {
        echo "This beverage is $this->color and $this->temperature";
    }

    // getter
    public function getPrice()
    {
        return $this->price;
    }
    // setter
    public function setPrice($price)
    {
        if($price<0){
            echo "too low!";
            return;
        }
        $this->price = $price;
    }

}

$sprite = new beverage("yellow", 1.40);
$cola = new beverage("black", 2);
$pepsi = new beverage("black", 1.80);
$freewayCola = new beverage("black", 0.65);
$riverCola = new beverage("black", 0.65);       // how do I get the default value by not declaring it here?

$cola->getInfo();
//________________________________________________

echo "</br>";
$cola->setPrice(-1);
echo "</br>";
$cola->setPrice(3.5);
echo "new price is: " .$cola->getPrice();



?>
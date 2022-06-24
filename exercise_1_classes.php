<?php
declare(strict_types=1); // <<< DON'T FORGET THIS :D

/* EXERCISE 1
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.
Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.
USE TYPEHINTING EVERYWHERE!
*/

// class template
class Beverage {

    // The Properties
public string $color; //type declaration to "string"
public float $price;
public string $temperature;  //this is to set a default

    // The Constructor with incoming parameters in the brackets
    
    public function __construct($color, $price)
    
    {
    // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
    $this->color = $color;
    $this->price = $price;
    $this->temperature = "cold";  //this is to set a default
    }

    // The functions
    public function getInfo() : void
    {
        echo "This beverage is $this->color and $this->temperature";
    }
}

$sprite = new beverage("yellow", 1.40);
$cola = new beverage("black", 2);
$pepsi = new beverage("black", 1.80);
$freewayCola = new beverage("black", 0.65);
$riverCola = new beverage("black", 0.65);

$cola->getInfo();
$pepsi->getInfo();
$freewayCola->getInfo();




?>
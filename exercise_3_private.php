<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage
{

    // The Properties
    private string $color; //type declaration to "string"
    private float $price;
    private string $temperature; //= "cold";  //this is to set a default /// wrong way!!!


    // The Constructor with incoming parameters in the brackets
    public function __construct(string $color, float $price)
    {

        // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
    }

    // The functions
    private function getInfo(): string
    {
        return "This beverage is " . $this->color . " and " . $this->temperature;
    }


    //
    //
    //
    //
    //
    //
    // (Irish) Setters
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }
    // (David) Getters
    public function getColor()
    {
        return $this->color;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getTemperature()
    {
        return $this->temperature;
    }
    public function printInfo()
    {
        echo $this->getInfo();
    }
}

class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

    // Constructor
    public function __construct(string $color, float $price, string $name, float $alcoholPercentage)

    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    private function beerInfo(): void
    {
        echo "Hi, I'm ";
        echo $this->getName();
        echo " and have an alcohol percentage of ";
        echo $this->getAlcoholPercentage();
        echo " and I have a ";
        echo $this->getColor();
        echo "color.";
        // "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."
    }



    //   _____      _   _            
    //  / ____|    | | | |           
    // | (___   ___| |_| |_ ___ _ __ 
    //  \___ \ / _ \ __| __/ _ \ '__|
    //  ____) |  __/ |_| ||  __/ |   
    // |_____/ \___|\__|\__\___|_|   
    /////////////////////////////////                                 

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setAlcoholPercentage($alcoholPercentage)
    {
        $this->alcoholPercentage = $alcoholPercentage;
    }





    //   _____      _   _            
    //  / ____|    | | | |           
    // | |  __  ___| |_| |_ ___ _ __ 
    // | | |_ |/ _ \ __| __/ _ \ '__|
    // | |__| |  __/ |_| ||  __/ |   
    //  \_____|\___|\__|\__\___|_|   
    //////////////////////////////

    public function getColor()
    {
        return $this->color;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAlcoholPercentage()
    {
        return $this->alcoholPercentage;
    }
    public function getBeerInfo()
    {
        return $this->beerInfo();
    }
}
$cara = new Beer("yellowish", 0.60, "Carapils", 4.4);
$duvel = new Beer("biercleur", 3.50, "Duvel", 8.5);

// set Duvel new color
$duvel->setColor("light");

echo $duvel->getAlcoholPercentage(); // using the class method, which contains a method with return ($ITEM->METHOD)
echo "</br>";
echo $duvel->getAlcoholPercentage();  // access the PROPERTY ($ITEM->PROPERTY)
echo "</br>";
echo $duvel->getColor();
echo "</br>";
$duvel->printInfo();
echo "</br>";
$duvel->getBeerInfo();

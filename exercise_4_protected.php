<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/


class Beverage
{

    // The Properties
    protected string $color; //type declaration to "string"
    protected float $price;
    protected string $temperature; //= "cold";  //this is to set a default /// wrong way!!!


    // The Constructor with incoming parameters in the brackets
    public function __construct(string $color, float $price)
    {

        // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
    }

    // The functions
    protected function getInfo(): string
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
    protected string $name;
    protected float $alcoholPercentage;

    // Constructor
    public function __construct(string $color, float $price, string $name, float $alcoholPercentage)

    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function beerInfo(): void
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
?>
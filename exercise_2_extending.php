<?php

declare(strict_types=1); // <<< DON'T FORGET THIS :D
/* EXERCISE 2
TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

// class template
class Beverage
{

    // The Properties
    public string $color; //datatype declaration to "string"
    public float $price;
    public string $temperature;
    // The Constructor with incoming parameters in the brackets
    public function __construct(string $color, float $price)
    {
        // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
    }

    // The functions
    public function getInfo(): void
    {
        echo "This beverage is $this->color and $this->temperature";
    }
}

// make some Beverages>>
$sprite = new beverage("yellow", 1.40);
$cola = new beverage("black", 2);
$pepsi = new beverage("black", 1.80);
$freewayCola = new beverage("black", 0.65);
$riverCola = new beverage("black", 0.65);


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
$duvel = new Beer("blonde", 3.50, "Duvel", 8.5);

echo $duvel->getAlcoholPercentage(); // using the class method, which contains a method with return ($ITEM->METHOD)
echo "</br>";
echo $duvel->alcoholPercentage;  // access the PROPERTY ($ITEM->PROPERTY)
echo "</br>";
echo $duvel->color;
echo "</br>";
// $duvel->getInfo();
?>
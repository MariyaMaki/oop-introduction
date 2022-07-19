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
class Beverage {
    public string $color;
    public float $price;
    public string $temperature;

    public function __construct(string $color, float $price, string $temperature="cold"){
        $this->color=$color;
        $this->price=$price;
        $this->temperature=$temperature;

    }

    public function getInfo():string {
        return "This beverage is $this->temperature and $this->color.";
    }

}

class Beer extends Beverage{
    public string $name;
    public float $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage){
        parent::__construct($color, $price);
        $this->name=$name;
        $this->alcoholPercentage=$alcoholPercentage;
    }

    public function getAlcoholPercentage():float
    {
        return $this->alcoholPercentage;
    }
}
$beerDuvel= new Beer("blond", 3.5, "Duvel", 8.5);

echo $beerDuvel->getAlcoholPercentage()."<br>";
echo $beerDuvel->getInfo()."<br>";
echo $beerDuvel->color."<br>";

var_dump($beerDuvel->getAlcoholPercentage()."<br>");
var_dump($beerDuvel->getInfo()."<br>");
var_dump($beerDuvel->color."<br>");
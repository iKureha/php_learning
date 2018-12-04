<?php

namespace Learning_php;

// create an array
// $array_name = array();
$cars = array("Volvo", "BMW", "Toyota");
echo "I like" . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// array length
$cars[] = "Honda";
$arrlength = count($cars);
echo "<br>" . $arrlength . "<br>";

// traverse an array
for ($x = 0; $x < $arrlength; $x++)
{
	echo $cars[$x];
	echo "<br>";
}
echo "<br>";

// create an associate array
$associate_array = array("name" => "Henry", "age" => "30", "gender" => "male");
$associate_array["job"] = "engineer";
echo $associate_array["name"] . " is " . $associate_array["age"] . " years old, and he is an " . $associate_array["job"];
echo "<br>";

// traverse an associate array
foreach ($associate_array as $x=>$x_value)
{
	echo $x . ": " . $x_value;
	echo "<br>";
} 
echo "<br>";

// class
class Car {
	var $brand;
	var $color;
	
	function __construct($b, $c){
		$this->brand = $b;
		$this->color = $c;
	}
/*
	function __destruct(){
		print "destruct!";
	}
*/	
	function setBrand($b){
		$this->brand = $b;
	}
	
	function getBrand(){
		echo $this->brand . "<br>";
	}

	function setColor($c){
		$this->color = $c;
	}

	function getColor(){
		echo $this->color . "<br>";
	}

}


$car1 = new Car("Toyota", "red");
$car2 = new Car("Honda", "blue");
$car3 = new Car("Benz", "yellow");
$car4 = new Car("BMW", "black");

/*
$car1 = new Car;
$car2 = new Car;
$car3 = new Car;
$car4 = new Car;

$car1->setBrand("Toyota");
$car2->setBrand("Honda");
$car3->setBrand("Benz");
$car4->setBrand("BMW");

$car1->setColor("red");
$car2->setColor("blue");
$car3->setColor("yellow");
$car4->setColor("black");
*/

$car1->getBrand();
$car2->getBrand();
$car3->getBrand();
$car4->getBrand();

$car1->getColor();
$car2->getColor();
$car3->getColor();
$car4->getColor();
?>

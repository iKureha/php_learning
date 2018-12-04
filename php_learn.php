<?php
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

// create an associate array
$associate_array = array("name" => "Henry", "age" => "30", "gender" => "male");
$associate_array["job"] = "engineer";
echo $associate_array["name"] . " is " . $associate_array["age"] . " years old, and he is an " . $associate_array["job"];

?>

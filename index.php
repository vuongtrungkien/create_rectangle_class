<?php
include "Rectangle.php";

$width  = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);




echo ("Your Rectangle". $rectangle->display() . "</br>");

echo "perimeter = ".$rectangle->getPerimeter(). "</br>";
echo "Area = ".$rectangle->getArea(). "</br>";
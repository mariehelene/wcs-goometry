<?php
require_once 'Square.php';
require_once 'Circle.php';
echo $rectangle = new Rectangle(200,300,"blue");
echo $square = new Square(200);
echo $circle = new Circle(100,"green");

echo "<br>Perimeter of circle is " . $circle->getPerimeter() . " px";
echo "<br>Area of rectangle is " . $rectangle->getArea() . ' px<sup>2</sup>';
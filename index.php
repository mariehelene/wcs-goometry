<?php
require_once 'Circle.php';
require_once 'Square.php';

spl_autoload_register(function ($name) {
    throw new Exception("Impossible de charger $name.");
});

try {
    echo $rectangle = new Rectangle(200,300,"blue");
    echo $circle = new Circle(200,"green");
    echo $square = new Square(200);
}catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

echo "<br>Perimeter of circle is " . $circle->getPerimeter() . " px";
echo "<br>Area of rectangle is " . $rectangle->getArea() . ' px<sup>2</sup>';


try {
    $circle->setRadius(-10);
}catch( Exception $exception){
    echo '<br>Error on setRadius: ',  $exception->getMessage(), "\n";
}

try {
    $square->setWidth(-10);
}catch( Exception $exception){
    echo '<br>Error on setWidth: ',  $exception->getMessage(), "\n";
}

try {
    $rectangle->setHeight(-10);
}catch( Exception $exception){
    echo '<br>Error on setHeight: ',  $exception->getMessage(), "\n";
}

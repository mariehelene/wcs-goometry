<?php
function AutoloadClass($name) {
    include str_replace("Geometry\\", "", $name) . '.php';
}
spl_autoload_register('AutoloadClass');

use Geometry as g;

echo $rectangle = new g\Rectangle(200,300,"blue");
echo $circle = new g\Circle(200,"green");
echo $square = new g\Square(200);

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

<?php
namespace Geometry;

// require_once 'Rectangle.php';

class Square extends Rectangle
{
    public function __construct(int $width)
    {
        parent::__construct($width,$width);
    }

    public function getPerimeter(): float
    {
        return $this->width * 4;
    }

    public function getArea(): float
    {
        return $this->width^2;
    }

}
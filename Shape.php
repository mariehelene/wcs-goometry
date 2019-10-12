<?php
namespace Geometry;

abstract class Shape
{
    /**
     * @var string
     */
    protected $color = 'black';

    /**
     * @param string $color
     * @return Shape
     */
    public function setColor(string $color): Shape
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return float
     */
    abstract public function getPerimeter(): float ;

    /**
     * @return float
     */
    abstract public function getArea(): float ;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
}
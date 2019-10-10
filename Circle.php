<?php
require_once 'Shape.php';

class Circle extends Shape
{
    /**
     * @const float
     */
    private const PI = 3.14159;

    /**
     * @var integer
     */
    private $radius;

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     * @return Circle
     */
    public function setRadius(int $radius): Circle
    {
        $this->radius = abs($radius);
        return $this;
    }

    public function __construct(int $radius, string $color = 'black')
    {
        $this->radius = $radius;
        parent::setColor($color);
    }

    public function __toString()
    {
        return '<div style="width:' . $this->radius . 'px;height:' . $this->radius . 'px; border-radius:' . $this->radius . 'px; background:' . $this->color . ';"></div>';
    }

    public function getPerimeter(): float
    {
        return 2 * self::PI * $this->radius;
    }

    public function getArea(): float
    {
        return $this->radius^2 * self::PI;
    }
}
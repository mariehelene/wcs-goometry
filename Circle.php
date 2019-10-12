<?php
require_once 'Shape.php';

class Circle extends Shape
{
    /**
     * @var integer
     */
    private $radius;

    /**
     * @const float
     */
    private const PI = 3.14159;

    public function __construct(int $radius, string $color = 'black')
    {
        try {
            $this->setRadius($radius);
        }catch( Exception $exception){
            echo '<br>Error on Circle construct: ',  $exception->getMessage(), "\n";
        }
        parent::setColor($color);
    }

    /**
     * @param int $radius
     * @return Circle
     * @throws LogicException
     */
    public function setRadius(int $radius): Circle
    {
        if ($radius <= 0) {
            throw new LogicException('Radius must be > 0!');
        } else {
            $this->radius = $radius;
        }
        return $this;
    }

    public function __toString()
    {
        return '<div style="width:' . $this->radius . 'px;height:' . $this->radius . 'px; border-radius:' . $this->radius . 'px; background:' . $this->color . ';"></div>';
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }

    public function getDiameter(): float {
        return $this->radius * 2;
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
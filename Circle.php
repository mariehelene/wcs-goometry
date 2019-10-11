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
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
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

    public function getPerimeter(): float
    {
        return 2 * self::PI * $this->radius;
    }

    public function getArea(): float
    {
        return $this->radius^2 * self::PI;
    }
}
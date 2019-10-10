<?php
require_once 'Shape.php';

class Rectangle extends Shape
{
    /**
     * @var integer
     */
    protected $width;

    /**
     * @var integer
     */
    protected $height;

    public function __construct(int $width, int $height, string $color = 'black')
    {
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return Rectangle
     */
    public function setWidth(int $width): Rectangle
    {
        $this->width = abs($width);
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return Rectangle
     */
    public function setHeight(int $height): Rectangle
    {
        $this->height = abs($height);
        return $this;
    }

    public function __toString()
    {
        return '<div style="width:' . $this->width . 'px;height:' . $this->height . 'px; background:' . $this->color . ';"></div>';
    }

    public function getPerimeter(): float
    {
        return ($this->width + $this->height) * 2;
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }
}
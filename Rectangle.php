<?php
namespace Geometry;

use Exception;
use LogicException;

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

        try {
            $this->setWidth($width);
        }catch( Exception $exception){
            echo '<br>Error on construct: ',  $exception->getMessage(), "\n";
        }

        try {
            $this->setHeight($height);
        }catch( Exception $exception){
            echo '<br>Error on construct: ',  $exception->getMessage(), "\n";
        }
        $this->color = $color;
    }

    public function __toString()
    {
        return '<div style="width:' . $this->width . 'px;height:' . $this->height . 'px; background:' . $this->color . ';"></div>';
    }

    /**
     * @param int $width
     * @return Rectangle
     */
    public function setWidth(int $width): Rectangle
    {
        if ($width <= 0) {
            throw new LogicException('Width must be > 0!');
        } else {
            $this->width = $width;
        }
        return $this;
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }

    public function getPerimeter(): float
    {
        return ($this->width + $this->height) * 2;
    }

    /**
     * @param int $height
     * @return Rectangle
     * @throws
     */
    public function setHeight(int $height): Rectangle
    {
        if ($height <= 0) {
            throw new LogicException('Height must be > 0!');
        } else {
            $this->height = $height;
        }
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
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }
}
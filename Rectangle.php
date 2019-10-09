<?php


class Rectangle
{
    /**
     * @var integer
     */
    private $width;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var string
     */
    private $color;

    public function __construct(int $width, int $height, string $color = 'black')
    {
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }

    public function __toString()
    {
        return '<div style="width:' . $this->width . 'px;height:' . $this->height . 'px; background:' . $this->color . ';"></div>';
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
    public function setwidth(int $width): Rectangle
    {
        $this->width = $width;
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
        $this->height = $height;
        return $this;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Rectangle
     */
    public function setColor(int $color): Rectangle
    {
        $this->color = $color;
        return $this;
    }
}
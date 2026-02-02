<?php

namespace patterns\factory;

class Square extends Shape
{

    private float $width;

    function getArea(): float
    {
        return $this->width * $this->width;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

}
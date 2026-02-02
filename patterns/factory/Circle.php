<?php

namespace patterns\factory;

class Circle extends Shape
{

    private float $radius;

    function getArea(): float
    {
        return pi() * ($this->radius * $this->radius);
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

}
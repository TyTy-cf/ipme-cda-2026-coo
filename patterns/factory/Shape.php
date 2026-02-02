<?php

namespace patterns\factory;

use patterns\observer_observable\Observer;

abstract class Shape implements Observer
{
    abstract function getArea(): float;

    public function notify(): void
    {
        echo "L'air de l'objet " . $this::class . " est : " . $this->getArea() . "<br>";
    }

}
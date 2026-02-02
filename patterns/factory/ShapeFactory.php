<?php

namespace patterns\factory;

use patterns\observer_observable\Observable;
use ReflectionClass;

require_once("patterns/factory/Circle.php");
require_once("patterns/factory/Square.php");

class ShapeFactory extends Observable
{

    /**
     * @throws \ReflectionException
     */
    public function createShape(string $namespace): Shape|null {
        $reflection = new ReflectionClass($namespace);
        $instance = $reflection->newInstance();
        if ($instance instanceof Shape) {
            return $instance;
        }
        return null;
    }

}
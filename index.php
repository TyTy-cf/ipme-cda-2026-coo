<?php

use patterns\factory\Circle;
use patterns\factory\ShapeFactory;
use patterns\factory\Square;
use patterns\observer_observable\Observable;
use patterns\singleton\Singleton;

spl_autoload_register(function ($class) {
    // Convertir les backslashes du namespace en slashes de chemin
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    // Construire le chemin complet vers le fichier
    $file = __DIR__ . DIRECTORY_SEPARATOR . $classPath . '.php';

    // Si le fichier existe, l'inclure
    if (file_exists($file)) {
        require_once $file;
    }
});

$singleton = Singleton::getInstance();

$shapeFactory = new ShapeFactory();

$circle = $shapeFactory->createShape(Circle::class);
if ($circle instanceof Circle) {
    $circle->setRadius(5.0);
}

$square = $shapeFactory->createShape(Square::class);
if ($square instanceof Square) {
    $square->setWidth(5.0);
}

$shapeFactory->addObserver($circle)
        ->addObserver($square)
        ->notifyAll();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>COO</title>
  </head>
  <body>
    <h1>Date du jour</h1>
    <p>
        <?php echo date_format($singleton->getCreatedAt(), "d/m/Y h:i:s"); ?>
    </p>
    <strong>
        <?php echo Singleton::class ?>
    </strong>
  </body>
</html>
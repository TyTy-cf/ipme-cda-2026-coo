<?php

use patterns\builder\ChampionItemBuilder;
use patterns\builder\DirectorDeLaLeague;
use patterns\builder\ServiceBuilder;use patterns\builder\SpellItemBuilder;
use patterns\composite\HeadDepartment;
use patterns\composite\SalesDepartment;
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

// Singleton
$singleton = Singleton::getInstance();

// Factory
$shapeFactory = new ShapeFactory();

$circle = $shapeFactory->createShape(Circle::class);
if ($circle instanceof Circle) {
    $circle->setRadius(5.0);
}

$square = $shapeFactory->createShape(Square::class);
if ($square instanceof Square) {
    $square->setWidth(5.0);
}

// Observer - Observable
$shapeFactory->addObserver($circle)
        ->addObserver($square)
        ->notifyAll();

// Composite
$salesDepartment = (new SalesDepartment())->setName("IPME Florian");
$headDepartment = (new HeadDepartment())
    ->setName("IPME HD")
    ->addComposant(((new HeadDepartment())->setName("IPME SD")))
    ->addComposant($salesDepartment);

echo $headDepartment->getName() . " : <br>";
foreach ($headDepartment->getComposants() as $composant) {
    echo "- " . $composant->getName() . "<br>";
}

// Builder
$director = (new DirectorDeLaLeague())
    ->setBuilder(new ChampionItemBuilder())
    ->constructItem(1);

$director->setBuilder(new SpellItemBuilder())
    ->constructItem(2);

$director->setBuilder(new ServiceBuilder())
    ->constructItem(1);

var_dump($director->getItem());

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
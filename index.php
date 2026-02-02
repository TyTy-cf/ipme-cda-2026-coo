<?php

require_once("patterns/Singleton.php");

$singleton = Singleton::getInstance();

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
  </body>
</html>
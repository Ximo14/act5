<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Perro</title>
  </head>
  <body>
    <?php

    include 'clasePerro.php';

    $perro1 = new clasePerro();
    $perro1-> setColor('negro');
    echo "El color del perro es ".$perro1->getColor();

    $perro1->setRaza('caniche');
    echo "<br>La raza del perro es ".$perro1->getRaza();

    $perro1-> setAltura('1 metro');
    echo "<br>La altura del perro es ".$perro1->getAltura();

    $perro1->setPeso('15Kg');
    echo "<br>El perro es ".$perro1->getPeso();
     ?>
  </body>
</html>

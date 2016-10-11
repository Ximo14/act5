<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Probando las clases</title>
  </head>
  <body>
  <?php
  //incluimos la clase de mi compañero
  include 'claseBanco.php';
  //generamos los objetos
  $cuenta1 = new claseBanco();
  $cuenta1->setIngresos('100 euros');
  echo "Ingreso= " .$cuenta1->getIngresos();

  $cuenta1->setRetiros('50 euros');
  echo "<br>Retiros= " .$cuenta1->getRetiros();

  $cuenta1->setTotal('50 euros');
  echo "<br>Total= " .$cuenta1->getTotal();

  $cuenta1->setTotaldia('50');
  echo "<br>Totaldia= " .$cuenta1->getTotalDia();


   ?>
  </body>
</html>

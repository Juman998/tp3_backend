<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tp1</title>
  </head>
  <body>
    <h1>Ejercicios del TP3</h1><br><hr>
    <h2>Ejercicio 1</h2>
    <h3>Mostrar los numeros del 1 al 100</h3>
    <?php
    $i = 0;
    while ($i < 100) {
    $i++;
    echo "$i, ";
    }
    ?>

    <h2>Ejercicio 2</h2>
    <h3>Mostrar los numeros del 100 al 1</h3>
    <?php
    $i = 100;
    do {
    echo "$i, ";
    $i--;
    } while ($i > 0);
    ?>

    <h2>Ejercicio 3</h2>
    <h3>Mostrar los numeros pares del 1 al 100</h3>
    <?php
    $i = 0;
    while ($i < 100) {
    $i++;
    $i++;
    echo "$i, ";
    }
    ?>

    <h2>Ejercicio 4</h2>
    <h3>Mostrar los numeros impares del 1 al 100</h3>
    <?php
    $i = 1;
    do {
    echo "$i, ";
    $i++;
    $i++;
    } while ($i < 100);
    ?>

    <h2>Ejercicio 5</h2>
    <h3>Mostrar las suma de los numeros del 1 al 20</h3>
    <?php
    $i = 0;
    $suma = 0;
    while ($i < 20) {
    $i++;
    $suma = $suma + $i;
    echo "$suma, ";
    }
    ?>

    <h2>Ejercicio 6</h2>
    <h3>Mostrar las suma de los numeros pares del 1 al 20</h3>
    <?php
    $i = 0;
    $suma = 0;
    while ($i < 20) {
    $i++;
    $i++;
    $suma = $suma + $i;
    echo "$suma, ";
    }
    ?>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo  PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>

    <div class="container">
          <h1>Aprendiendo PHP</h1>

          <div class="codigo">
             <?php
#       declaraciones de arrays
            $frutas = Array('manzana','naranja','melon','platano','uvas',);
#    impresion por pantalla de arrays ver array
              echo $frutas[2];
              echo "<br/>";
              echo $frutas[3];

#    impresion de seleccion de Array_push
#    esto imprime platano al final de los arrays
              array_push($frutas,'platano');
              unset($frutas[1]);
#    impresion de arreglos de arrays
              echo "<pre>";

              var_dump($frutas);
              print_r($frutas);

              echo "</pre>";
              ?>

    </div>

  </body>
</html>

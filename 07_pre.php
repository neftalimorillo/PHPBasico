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

# pre, se usa para ordenar por puntos de arriba hacia abajo <pre>
# var_dump, imprime segun sea el dato o elemento(bool, int , array) <pre>
# print_r, imprime la posicion del elemento al  que quiero acceder
             <?php
             $persona = array(
            'nombre' => 'neftali',
            'apellido' => 'morillo',
            'pais' => 'venezuela',
            'edad' => 35,
            'usuario_logueado' => true
             );
  $frutas = Array('manzana','naranja','melon','platano','uvas',);
             echo "<pre>";
             var_dump($persona);
             echo "</pre>";

             echo "<pre>";
             print_r($frutas);
             echo "</pre>";
#  imprimo la posicion 2 del array dentro de la variable "frutas"

             echo $frutas[4];

              echo $persona['pais'];

              ?>

    </div>

  </body>
</html>

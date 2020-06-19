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
         $var1 = 20;
         $var2 = 19;

        if ($var1 > $var2) {
          echo "var1 es mayor";
             }
          elseif ($var1 == $var2) {
            echo "son iguales";
          }else {
           echo "var2 es mayor";
          }
         echo "<hr>";        // linea
          if ($var1 != 20) {
            echo "no,no son iguales";
          }
    else {
      echo "si, son iguales";
    }

            echo "<hr>";
          $usuario_logueado = false;
          if ($usuario_logueado) {
            echo "muestra contenido";
          }
          else {
            echo "por favor inicie sesion";
          }
             ?>

    </div>

  </body>
</html>

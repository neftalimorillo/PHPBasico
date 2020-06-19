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
#imprimo los nombres de las fritas codigo mas reducido
             <?php
              $frutas = array('manzana','naranja','melon','platano','uvas');
              $i = 0;
              while($i <= count($frutas)){
              echo $frutas[$i] . "<br>";
             $i++;
              }
# imprimo los numeroa del 1 al 100 opcion "while"
            $i = 0;
              while($i <= 100){

              echo $i . "<br/>";
             $i++;
              }

              ?>

    </div>

  </body>
</html>

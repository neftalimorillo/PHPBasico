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
              $frutas = Array('manzana','naranja','melon','platano','uvas',);
              foreach($frutas as $fruta){
              echo $fruta, "<br/>";

              }

              ?>
    # espacio
              <br/>
              <br/>
   # inicio php
              <br/>
              <br/>
            <?php
#               $frutas = Array('manzana','naranja','melon','platano','uvas',);
               foreach($frutas as $fruta){
#   imprimo mis frutas favorita
               echo "UNA DE MIS FRUTAS FAVORITAS ES:" . " ";
               echo $fruta . "<br/>";
#   imprime linea completa hasta el final debajo de las palabras .
                echo  "<hr>";
               }

               ?>
    </div>

  </body>
</html>

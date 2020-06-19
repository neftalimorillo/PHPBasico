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
# como hacer funciones en PHP wordpress
    <br>
             <?php
             function saludo($argumento){
              echo "Bienvenido {$argumento} al sitio <br/>";

             }
          saludo ("pedro");
          saludo("juan");
          saludo("miguel");

          function numero($num1 ,$num2){
          echo $num1 + $num2 . "<br/>" ;
          }
           numero(10, 30);
           numero(2, 5);
         
              ?>

    </div>

  </body>
</html>

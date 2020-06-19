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
#imprimo los nombres de las frutas codigo mas reducido
    <br>
    <br>
#  con "count" imprimo el numero de elementos destro de la variable "$frutas"
    <br>
    <br>
             <?php
              $frutas = array('manzana','naranja','melon','platano','uvas');
              echo  count($frutas);
              echo "<br/>";
              $mi_nombre = "neftali enrique morillo rondon";
# cuent las letras sin los espacios
              $mi_nombre2 = str_replace(' ','',$mi_nombre);
# cuenta las letras
              echo strlen($mi_nombre);
                  echo "<br/>";
                echo ($mi_nombre);
                            echo "<br/>";
#cuenta las letras e imprime en resultado en numero sin espacios
              echo strlen($mi_nombre2);
              echo "<br/>";
              echo ($mi_nombre2);
              echo "<br/>";
#coloc todo en mayuscula no recomendada para titulos
# jala muchos recursosd el servidor
              echo mb_strtoupper($mi_nombre);
              echo "<br/>";
#coloc todo en minuscula
              echo mb_strtolower($mi_nombre);
# ejemplo de uso recomendado pra ste tipo de validaciones
            echo "<br/>";

           $password = "abxcddcsc";

           if(strlen($password) < 5){
             echo " El password es debil";
           }
           else{
             echo"El password es seguro";
           }
              ?>

    </div>

  </body>
</html>

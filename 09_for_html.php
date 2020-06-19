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
# php dentro de html y html dentro de php
              <br/>
             <?php
             for($i = 0; $i <= 100 ; $i++) {
               if($i == 5){
#  el "continue" hace que continue la rutina, puedes usar un "exit para salir"

                echo "es cinco!!!! <br/>";
                continue;
               }
#             echo $i;
#             echo "<br/>";
             echo "el  numero es: " . $i ."<br/>";
             }


              ?>


    </div>

  </body>
</html>

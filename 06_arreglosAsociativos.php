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

#          arrays asociados y concatenacion
             <?php
             $persona = array(
            'nombre' => 'neftali',
            'apellido' => 'morillo',
            'pais' => 'venezuela'
             );
             echo "<br/>";
             echo "<br/>";
            echo $persona['nombre'] . " " . $persona['apellido'] . ", es de " . $persona['pais']. ". " ;

             echo "<pre>";
             print_r($persona);
             echo "</pre>";

              ?>

    </div>

  </body>
</html>

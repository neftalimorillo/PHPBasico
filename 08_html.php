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
             <?php
             $persona = array(
            'nombre' => 'neftali',
            'apellido' => 'morillo',
#            'pais' => 'venezuela',
#            'edad' => 35,
#            'usuario_logueado' => true
             );

              ?>
                            <br/>
                           <br/>
# php dentro de html

          <h1>HOLA!! <?PHP echo $persona['nombre'] . " " . $persona['apellido']; ?></h1>

#otra forma de hacerlo HTML dentro de php
         <?php echo "<h1> HOLA!" . $persona['nombre'] . " " . $persona['apellido'] ?></h1>

    </div>

  </body>
</html>

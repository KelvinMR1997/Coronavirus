



<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

        $parcial1 = $_POST['p1'];
        $parcial2 = $_POST['p2'];
        $parcial3 = $_POST['p3'];
        $ExFinal = $_POST['e-final'];
        $TraFinal = $_POST['t-final'];

    $ParcialesProm = ($parcial1 + $parcial2 + $parcial3) / 3;


    $TotalParcial = $ParcialesProm* 0.35;
    $TotalExamen = $ExFinal * 0.35;
    $TraProm = $TraFinal * 0.30;
    $NotaFinal = $TotalParcial + $TotalExamen + $TraProm;

    echo "La nota final es: ". $NotaFinal ."<br>";

    if($NotaFinal<3){
        echo "El estudiante no aprobó";
        }
       else{
        echo "El estudiante aprobó";
        }
    ?>

<a href="../Index.html"> 
  <button class="boton" >
    VOLVER
  </button>
</a>
  </body>
</html>
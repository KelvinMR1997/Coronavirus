<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php

  $N_producto = $_POST['N-producto'];
  $Clave = $_POST['Clave'];
  $precio = $_POST['precio'];



  if ($Clave == 1) {
    $PrecioTotal = $precio - ($precio * 0.1);
    echo "Nombre producto: " . $N_producto . "<br>";
    echo "Clave producto: " . $Clave . "<br>";
    echo "Precio original: " . $precio . "<br>";
    echo "Felicidades usted ha obtenido un descuento del 10% ($" . $precio * 0.1 . ") por la compra de un(o/a) " . $N_producto . "<br>";
  } else {
    if ($Clave == 2) {
      $PrecioTotal = $precio - ($precio * 0.2);
      echo "Nombre producto: " . $N_producto . "<br>";
      echo "Clave producto: " . $Clave . "<br>";
      echo "Precio original: " . $precio . "<br>";
      echo "Felicidades usted ha obtenido un descuento del 20% ($" . $precio * 0.2 . ") por la compra de un(o/a) " . $N_producto . "<br>";
    } else {
      echo "Por favor inserte una clave valida.";
    }
  }
  ?>

  <a href="../Index.html">
    <button class="boton">
      VOLVER
    </button>
  </a>
</body>

</html>
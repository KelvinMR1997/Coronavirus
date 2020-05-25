<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <?php

    $dinero = $_POST['dinero'];

    echo "El monto presupuestal es: " . $dinero . "<br>";

    $ginecologia = $dinero * 0.4;
    $traumatologia = $dinero * 0.3;
    $pediatria = $dinero * 0.3;

    echo "La cantidad de dinero para el area de ginecologia es: " . $ginecologia . "<br>";
    echo "La cantidad de dinero para el area de traumatologia es: " . $traumatologia . "<br>";
    echo "La cantidad de dinero para el area de pediatria es: " . $pediatria . "<br>";

    ?>

<a href="../Index.html">
    <button class="boton">
      VOLVER
    </button>
  </a>
</body>

</html>
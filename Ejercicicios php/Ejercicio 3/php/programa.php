<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php

  $N_paciente = $_POST['N-paciente'];
  $peso = $_POST['peso'];
  $estatura = $_POST['estatura'];


  $IMC = $peso / ($estatura * $estatura);
  echo "El indice de masa corporal del paciente es: " . $IMC . "<br>";

  if ($IMC < 18.5) {
    echo "¡Cuidado, ".$N_paciente."! Estas por debajo del peso";
  } else {
    if ($IMC < 24.9) {
      echo "Excelente,".$N_paciente." Eres una persona saludable.";
    } else {
      if ($IMC < 29.9) {
        echo "¡Cuidado, ".$N_paciente."! tienes sobrepeso.";
      } else {
        if ($IMC < 39.9) {
          echo "¡Cuidado, ".$N_paciente."! Eres obeso.";
        } else {
          echo "¡Cuidado, ".$N_paciente."! Tienes obesidad morbida";
        }
      }
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
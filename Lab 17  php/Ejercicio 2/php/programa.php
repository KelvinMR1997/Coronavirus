<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php

  $N_vendedor = $_POST['N-vendedor'];
  $vendidos = $_POST['vendidos'];
  $P_total = $_POST['precio'];



  $Salario = 450000;
  $comision = $vendidos * 50000;
  $Com_venta = $P_total * 0.05;
  $SalarioTotal = $Salario + $comision + $Com_venta;

 

  if($vendidos<=0){
    
    echo $N_vendedor.", este mes no vendiste :(  tu salario es: ".$Salario . "<br>";
  }
  else{
    if ($vendidos==1){
      echo "¡".$N_vendedor."! Tienes una comision del ".$Com_venta."% por la venta de ".$vendidos." auto, tu salario es: ". $SalarioTotal . "<br>";
    }
    else {
      echo "¡".$N_vendedor."! Tienes una comision del 5% ($".$Com_venta.") por la venta de ".$vendidos." autos, tu salario es: ". $SalarioTotal . "<br>";
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

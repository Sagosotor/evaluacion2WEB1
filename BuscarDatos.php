<?php

include('BaseDatos.php');

if(isset($_POST["btnBuscar"])){

    $documento=$_POST["BuscarDocumento"];
   

    $consulta="SELECT  documento, nombre, apellido, correo, password FROM usuarios WHERE documento='$documento'";

    $operacion= new BaseDatos();

    $resultado=$operacion->consultarEnBaseDatos($consulta);

  echo("<br>");
  print_r($resultado);

}else{

    echo("No presiono el boton");


}

?>
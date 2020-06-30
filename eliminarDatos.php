<?php

include('BaseDatos.php');

if(isset($_POST["btnEliminar"])){

    $documento=$_POST["numeroCedula"];
    

    $consulta="INSERT INTO usuarios(documento, nombre, apellido, correo, password ) VALUES ('$documento','$nombre','$apellido','$correo','$password')";

    $operacion= new BaseDatos();

    $resultado=$operacion->alterarBaseDatos($consulta);

 
     

}else{

    echo("No presiono el boton");


}

?>
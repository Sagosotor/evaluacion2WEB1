<?php

include('BaseDatos.php');

if(isset($_POST["btnEnviar"])){

    $documento=$_POST["numeroCedula"];
    $nombre=$_POST["nombreUsuario"];
    $apellido=$_POST["apellidosUsuario"];
    $correo=$_POST["emailUsuario"];
    $password=$_POST["passUsuario"]; 

    $consulta="INSERT INTO usuarios(documento, nombre, apellido, correo, password ) VALUES ('$documento','$nombre','$apellido','$correo','$password')";

    $operacion= new BaseDatos();

    $resultado=$operacion->alterarBaseDatos($consulta);

 
     

}else{

    echo("No presiono el boton");


}

?>
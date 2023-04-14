<?php

include "conexion.php";


if(isset ($_POST['guardar'])){
    $nombres= $_POST ['usuario'];
    $claves= $_POST ['clave'];
    $email= $_POST ['correo'];
  


    $insertadatos = "INSERT INTO validar VALUES ('','$nombres','$claves','$email')";
    $ejecutarInserta = mysqli_query ($enlace , $insertadatos);

    header("location: ../registro.html");

  
}

?>
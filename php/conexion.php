<?php

$servidor = "localhost";
$user = "root";
$password = "";
$basededato = "login";

$enlace = mysqli_connect ($servidor , $user , $password , $basededato);


if(isset ($_POST['registro'])){
    $nombre= $_POST ['nombre'];
    $clave= $_POST ['clave'];
    $grado= $_POST ['curso'];
    $ids= $_POST ['Nficha'];
    $imagen1= $_FILES ['file'];

    $imagen1 = addslashes(file_get_contents($imagen1['tmp_name']));

    $insertadatos = "INSERT INTO getfiles VALUES ('','$nombre','$clave','$grado','$ids','$imagen1')";
  

    header("location: ../formulario.html");

  
}

?>
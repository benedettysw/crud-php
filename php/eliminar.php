<?php

$id=$_GET['id'];
include "conexion.php";



$elimina="delete from getfiles where id = '".$id."'";
$resultado=mysqli_query($enlace,$elimina);

header("location: tablaa.php");
?>

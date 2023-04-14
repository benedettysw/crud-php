<?php


$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$apellido=$_POST['apellido'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","login");

$consulta="SELECT*FROM pro where nombre='$usuario' and apellido='$apellido' and clave='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
   header("location: adminpro.php");

}else{
   ?>
   <?php
   header("location: ../pro.html");    
    ?>
    <h1> Admin No Encontrado</h1>
    <?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
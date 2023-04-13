<?php


$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","login");

$consulta="SELECT*FROM validar where usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
   header("location: tablaa.php");

}else{
   ?>
   <?php
   header("location: ../login.html");    
    ?>
    <h1> Admin No Encontrado</h1>
    <?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
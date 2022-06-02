<?php
include ("conexion.php");
$con = conectar();
$cod_estudiante = $_GET['id'];
$sql="DELETE FROM alumno WHERE cod_estudiante ='$cod_estudiante'";
$mysql=mysqli_query($con,$sql);
if($mysql){
    Header("Location: index.php");
}else{}
?>
<?php
include ("conexion.php");
$con = conectar();
$cod_estudiante = $_POST['txtcod'];
$cedula = $_POST['txtcedula'];
$nombre = $_POST['txtnombre'];
$apellido = $_POST['txtapellido'];
$sql = "UPDATE alumno SET cc='$cedula',nombres='$nombre', apellido='$apellido' WHERE cod_estudiante='$cod_estudiante'";
$mysql = mysqli_query($con,$sql);
if($mysql){
    Header("location: index.php");
}else{}
?>
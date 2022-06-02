<?php 
include ("conexion.php");
$con = conectar();
$codestudiante = $_POST['txtcod'];
$cedulaestudiante = $_POST['txtcedula'];
$nombreestudiante = $_POST['txtnombre'];
$apellidoestudiante = $_POST['txtapellido'];
$sql = "INSERT INTO alumno VALUES ('$codestudiante','$cedulaestudiante','$nombreestudiante','$apellidoestudiante')";
$query = mysqli_query($con,$sql);
if($query){
    Header("Location: index.php");
}else{}
?>
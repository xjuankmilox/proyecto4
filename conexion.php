<?php
function conectar(){
    $host = "localhost";
    $usuario ="root";
    $pass = "123456";
    $based = "baseejemplo";
    $conect = mysqli_connect($host,$usuario,$pass);
    mysqli_select_db($conect,$based);
    return $conect;
}
?>
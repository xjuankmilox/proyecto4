<?php
include("conexion.php");
$con = conectar();
$base="SELECT * FROM alumno";
$query=mysqli_query($con,$base);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Ejemplo</title>
</head>
<body>
<div class="container mt-5">
<div class="row">
    <div class="col-md-3 p-4 mb-2 bg-info text-dark">
    <!--sesion de datos-->
    <h1>Ingrese datos</h1>
    <form action="insertar.php" method ="POST">
        <input type="text" class="form-control mb-4 " name="txtcod" placeholder="Ingrese el codigo del estudiante">
        <input type="text" class="form-control mb-4 " name="txtcedula" placeholder="Ingrese el cedula del estudiante">    
        <input type="text" class="form-control mb-4 " name="txtnombre" placeholder="Ingrese el nombre del estudiante">
        <input type="text" class="form-control mb-4 " name="txtapellido" placeholder="Ingrese el apellido del estudiante">
        <input type="submit" class="btn btn-primary ">
    </form>
    </div>
    <div class="col-md-8">
        <table class="table border border-primary border border-4">
            <thead class="table-success table-striped border">
                <tr>
                    <th>
                        codigo estudiante
                    </th>
                    <th>
                        cedula estudiante
                    </th>
                    <th>
                        nombre estudiante
                    </th>
                    <th>
                        apellido estudiante
                    </th>

                </tr>
            </thead>
            <tbody class="table-info">
                <?php
                while($row=mysqli_fetch_array($query)){
                 ?>
                 <tr class="border border-primary border-bottom border border-2">
                    <th><?php echo $row ['cod_estudiante']?></th>
                    <th><?php echo $row ['cc']?></th>
                    <th><?php echo $row ['nombres']?></th>
                    <th><?php echo $row ['apellido']?></th>
                    <th><a href="actualizar.php?id=<?php echo $row ['cod_estudiante']?>" class="btn btn-info">editar</a></th>
                    <th><a href="delete.php?id=<?php echo $row ['cod_estudiante']?>" class="btn btn-danger">eliminar</a></th>

                 </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

</div>    

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>    
</body>
</html>
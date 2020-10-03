<?php 

require "database.php";

if(isset($_POST["enviar"]))
{
    if(strlen($_POST["identificacion"]) >= 1 && strlen($_POST["nombre"]) >= 1 && $_POST["horas"] > 0) 
{
    $identificacion = trim($_POST["identificacion"]);
    $nombre = trim($_POST["nombre"]);
    $fecha_reg = date("d/m/y");
    $horas = trim($_POST["horas"]);
    $consulta = "INSERT INTO datos(identificacion, nombre, horas, fecha_reg) VALUES ('$identificacion','$nombre','$horas','$fecha_reg')";
    $resultado = mysqli_query($conex,$consulta);

    if($resultado)
    {
        ?> 
            <h3 class="alert alert-success mt-5 text-center">Te has inscripto correctamente</h3>

        <?php
    } else 
    {
        ?> 

            <h3 class="alert alert-danger mt-5 text-center">Ha ocurrido un error</h3>

        <?php
    }
}
else
{
    ?> 

    <h3 class="alert alert-danger mt-5 text-center">Por favor complete los campos</h3>

    <?php
}
     
    $identificacion = "";
    $nombre = "";
    $fecha_reg = "";

}


?>
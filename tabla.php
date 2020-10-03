<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller</title>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="bg-dark" >
    <!-- NAVBAR-->

    <div class="header-logo">
    <a  href=""><img id="logo" src="img/cesde.png" width="20%" ></a>
    </div>
    <header>
    <a href="tabla.php" class="h4 header1">Tabla de trabajadores <span class="badge badge-secondary">BANCOLOMBIA</span></a>
    </header>
   

    <div class="container">
    <nav class="navbar navbar1 navbar-expand-lg navbar-dark bg-dark mt-5 h5">
  <a class="navbar-brand" href="index.php">Registro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="zapatos.php">Descuento en zapatos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="tabla.php">Bancolombia </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="numeros.php">Números pares</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
    <p class="p-3 mb-2 bg-info text-white text-center h4 card1">Despues de haber pedido la cantidad, primero debes oprimir en enviar.</p>
    <hr>

<script>

function pedircantidad()
{
    var n = Number(window.prompt("cuantos valores quieres", 1))
    document.cookie="var="+n
    
}
</script>


<?php if($_COOKIE["var"] <= 0) { ?>  
        <style type="text/css">
        .tabla1{
          display: none;
        }
        </style>

      <?php } else {?>
        <style>
          .tabla1{
          display: inline-block;
        }
        </style>
      <?php } ?>



<div style="margin-left: 45%;" class="card1">
    <a class="btn btn-primary p-3 mb-3 mt-2" onclick="pedircantidad();">Ingresa la cantidad</a>
</div>


<p class="display-5 h4 text-white">Ingrese el nombre de los trabajadores</p>

<form action="" class="was-validated">

<?php for($x=1;$x<=$_COOKIE["var"];$x++) : ?>

    <input class="is-invalid tabla1" type="text" placeholder="<?php echo $x ?>" name="nombre[<?php echo $x ?>]" id="nombre[<?php echo $x ?>]">

<?php endfor; ?>

<p class="display-5 h4 text-white">Ingrese el salario de sus trabajadores</p>



    <?php for($x=1;$x<=$_COOKIE["var"];$x++) : ?>

        <input class="is-invalid tabla1" type="number" placeholder="<?php echo $x ?>" name="salario[<?php echo $x ?>]" id="salario [<?php echo $x ?>]">

    <?php endfor; ?>

    <p class="display-5 h4 text-white">Ingrese la direccion de sus trabajadores</p>

    <?php for($x=1;$x<=$_COOKIE["var"];$x++) : ?>

        <input class=" is-invalid tabla1" type="text" placeholder="<?php echo $x ?>" name="direccion[<?php echo $x ?>]" id="direccion [<?php echo $x ?>]">

    <?php endfor; ?>

    <input type="submit" name="btn" value="Enviar" class="btn btn-primary btn-block mt-2">
</form>
<br>
<?php  
$sumaTotal = 0; 
$sumaCorresponsalB = 40000000;
$sumaCorresponsalC = 32000000;

?>
      
<div id="tabla" class="mt-2">
<?php for($x=1;$x<=$_COOKIE["var"];$x++) 
  {
       $sumaTotal = $sumaTotal + $_REQUEST["salario"][$x];
  }             
        
?>

<?php if($sumaTotal <= 0) { ?>  
        <style type="text/css">
        #tabla{
          display: none;
        }
        </style>

      <?php } else {?>
        <style>
          #tabla{
          display: block;
        }
        </style>
      <?php } ?>
<table class="table bg-secondary">
  <thead>
    <tr class="text-white">
      <th scope="col">#</th>
      <th scope="col">Trabajador</th>
      <th scope="col">Salario</th>
      <th scope="col">Direccion</th>
    </tr>
  </thead>
  <tbody>
  
 <?php if(isset($_REQUEST["btn"])) : ?>

   <?php for($x=1;$x<=$_COOKIE["var"];$x++): ?>

   <tr class="text-white">
      <th scope="row"><?php echo $x ?></th>
      <td><?php echo $_REQUEST["nombre"][$x] ?></td>
      <td><?php echo $_REQUEST["salario"][$x]?></td>
      <td><?php echo $_REQUEST["direccion"][$x]?></td>
    </tr>
 

   <?php endfor; ?>   
   <?php endif; ?>

   

    <?php

     if($sumaTotal > $sumaCorresponsalB && $sumaTotal > $sumaCorresponsalC)
    {
        $mensaje = "La corresponsal con mayor salario es la A con un total de " . number_format($sumaCorresponsalA);
    }
    else if($sumaCorresponsalB > $sumaCorresponsalC)
    {
        $mensaje = "La corresponsal con mayor salario es la B con un total de " . number_format($sumaCorresponsalB) ;
    }
    else if($sumaCorresponsalC > $sumaTotal)
    {
        $mensaje = "La corresponsal con mayor salario es la C";
    }

    ?>     
  
  </tbody>  
</table>
 <p class="p-3 mb-2 bg-info text-white text-center h3"><?php echo "La sumatoria total de la corresponsal es de: " . number_format($sumaTotal) . ". " . $mensaje; ?></p>
</div>





<script src="app.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
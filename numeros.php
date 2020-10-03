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
    <a href="tabla.php" class="h4 header1">Números pares </a>
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

<div class="row">
<div class="col-md-5">
    <form action="numeros.php" method="POST">
        <div class="card" style="width: 20rem;">
        <img src="img/g2.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h5 class="card-header">Números pares</h5>
            <p class="card-text">Las matemáticas discretas son un área de las matemáticas encargada del estudio de los conjuntos discretos: finitos o infinitos numerables.</p>
            <div class="form-group">
                <input type="Number" class="form-control text-center" placeholder="Ingresa el total de números" name="numeros">
            </div>
            <input type="submit" name="btn1" value="Obtener" class="btn btn-primary btn-block mt-2">
        </div>
        </div>
        </form>
</div>
<div class="col-md-7">
<?php if(isset($_POST["btn1"])) : ?>
  
  <?php if($_POST["numeros"] <= 0) { ?>  
        <style type="text/css">
        .tabla1{
          display: none;
        }
        </style>

      <?php } else {?>
        <style>
          .tabla1{
          display: block;
        }
        </style>
      <?php } ?>

      <div class="tabla1">

      <table class="table bg-secondary text-center">
  <thead>
    <tr class="text-white">
      <th scope="col" class="display-5 h4 font-weight-bolder"># pares del número obtenido</th>      
    </tr>
  </thead>
  <tbody>
  <?php for($x=0;$x<=$_POST["numeros"];$x = $x+2) : ?>

<tr class="text-white">
    <th scope="row"><?php echo $x; ?></th>
  </tr>

<?php endfor; ?>
<?php endif; ?>
  </tbody>  
</table>

      </div>

</div>
</div>





<script src="app.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
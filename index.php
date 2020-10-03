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
<body class="bg-dark">
    <!-- NAVBAR-->

    <div class="header-logo">
    <a  href=""><img id="logo" src="img/cesde.png" width="20%" ></a>
    </div>
    <header>
    <a href="index.php" class="h4 header1">Registro y calculo bàsico del salario</a>
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

    <!-- FIN NAVBAR-->

      <div class="row pt-5 pb-5">
        <div class="col-md-6">
        <div class="card bg-secondary card1">
          <div class="card-header">
            <h3 class="text-center">Calculo de su salario</h3>
          </div>
            <div class="card-body">
              <form action="index.php" method="POST" class="was-validated">
                <div class="form-group">
                  <input type="text" placeholder="Ingrese su identificaciòn" class="form-control text-center is-invalid" name="identificacion" id="validationServer01" required>
                </div>
                <div class="form-group">
                  <input type="text" placeholder="Ingrese su nombre" class="form-control text-center is-invalid" name="nombre" id="validationServer02" required>
                </div>
                <div class="form-group">
                  <input type="number" placeholder="Ingrese la suma de sus horas trabajadas" class="form-control text-center is-invalid" name="horas" id="validationServer03" required>
                </div>
                <div class="form-group">
                  <input type="submit" placeholder="Calcular" class="btn btn-primary btn-block" name="enviar" id="validationServer03" required>
                </div>
              </form>
            </div>
          </div>
          <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
        </div>

        <?php ; 
        
        $horas = 0;
        $salario = 0;
        $nombre = "";
        if(isset($_POST["enviar"])) 
        {
          $nombre = $_POST["nombre"];
          $horas = $_POST["horas"];
          $identificacion = $_POST["identificacion"];
        }


        ?>     



        <div class="col-md-6" id="vista">

        <?php 

          $salario = 0;

          if($horas <= 40)
            {
              $horas = $_POST["horas"];
              $salario = $horas * 20000;
            }
            else if($horas > 40)
            {
              $horasExtras = $horas - 40;
              $salario = number_format(($horasExtras * 25000) + (40*20000));

            }
        ?>

        <div class="card bg-secondary" >
          <div class="card-header"> 
            <h3 class="text-center">El total de su salario es</h3>
          </div>
          <div class="card-body">
          <?php if($salario <= 0) { ?>  
        <style type="text/css">
        #vista{
          display: none;
        }
        </style>

      <?php } else {?>
        <style>
          #vista{
          display: block;
        }
        </style>
      <?php } ?>
        
            <p class="form-group text-center h4"> <?php echo "Hola " . $nombre. " el total de tu salario es:  " .$salario ?>
            <p class="h5 text-center pt-3"> Recuerda ingresar los valores para obtener un resultado y quedar registrado en el sistema</p>
           </p>
      </div>
        </div>

        </div>
      </div>

      </div>

        <?php require "registrar.php"; ?>


<script src="app.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
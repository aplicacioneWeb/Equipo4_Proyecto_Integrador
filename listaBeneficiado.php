<?php 
require_once 'conexion.php';
?>
<!DOCTYPE html>
<html long="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <meta name="description" content="Este es un sitio web de ropa y calzado"/>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name=”author” content="Eqiipo 4 DARC"/>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">


<title>Lista de Beneficiados</title>
<script src="https://kit.fontawesome.com/d5f4a8a0cb.js" crossorigin="anonymous"></script>
  </head>
</head>
<body style="background-color:#FDFEFE;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Donacion y Acopio de Ropa y Calzado</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="inicio.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class=" dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" href="#">Administrador</a>
          <ul class="dropdown-menu">
            <li><a href="FormularioAdministrador.html" class="dropdown-item"> Regitrar administrador</a></li>
            <li><a href="listaAdministrador.php" class="dropdown-item">Lista de Administradores</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class=" dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" href="#">Donador</a>
          <ul class="dropdown-menu">
            <li><a href="FormularioDonador.html" class="dropdown-item"> Registrarse como donador</a></li>
            <li><a href="listaDonador.php" class="dropdown-item">Lista de donadores</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class=" dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" href="#">Beneficiado</a>
          <ul class="dropdown-menu">
            <li><a href="FormularioBeneficiado.html" class="dropdown-item">Registrar Beneficiado</a></li>
            <li><a href="listaBeneficiado.php" class="dropdown-item"> Lista de Beneficiados</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class=" dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" href="#">Fundaciones</a>
          <ul class="dropdown-menu">
            <li><a href="FormularioFundaciones.html" class="dropdown-item">Fundaciones</a></li>
            <li><a href="listaFundacxiones.php" class="dropdown-item">Lista de Fundaciones</a></li>
            <li><a href="FormularioFundaciones2.html" class="dropdown-item">Agregar Fundacion</a></li>
          </ul>
          </li>
      </ul>
    </div>
  </nav>  

   
    <div class="container">
        <div class="row col-md-12 col-lg-12-col-xs-12">
        <h3 class="text-left">
        Lista De Beneficiados
      </h3>
      <!--Tabla De Beneficiados-->
      <div class="container-fluid">
        <table class="table">
          <thead class="thead-dark">
            <tr>
            <th class="col">Clave</th>
              <th class="col">Nombre</th>
              <th class="col">Calle</th>
              <th class="col">Colonia</th>
              <th class="col">Municipio</th>
              <th class="col">Edad</th>
              <th class="col">Fecha</th>
              <th class="col">Operaciones</th>
            </tr>
            </thead>
            <tbody>
            <?php 
$queryResult = $pdo->query("SELECT * FROM beneficiado");
while($beneficiado = $queryResult-> fetch(PDO::FETCH_ASSOC)){ ?>
    <tr scope="row">
    <td><?php echo $beneficiado['id_beneficiado'] ?></td>
    <td><?php echo $beneficiado['Nombre'] ?></td>
    <td><?php echo $beneficiado['Calle'] ?></td>
    <td><?php echo $beneficiado['Colonia'] ?></td>
    <td><?php echo $beneficiado['Municipio'] ?></td>
    <td><?php echo $beneficiado['Edad'] ?></td>
    <td><?php echo $beneficiado['Fecha'] ?></td>

    <td>
    <?php echo '<a class="btn btn-primary" href="editarB.php?id_beneficiado=' . $beneficiado['id_beneficiado'] . '" role="button"> Editar<a/> ' ?>
       <?php echo '<a class="btn btn-danger" href="eliminarBeneficiado.php?id_beneficiado=' . $beneficiado['id_beneficiado'] . '" role="button"> Eliminar<a/> ' ?>

</td>
<?php } ; ?> 
          
  </tr>
</body>
   </table>
</div>
        </div>
    </div>
    


<!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5">

    <div style="background-color: #7FB3D5;">
      <div class="container">
  
        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">
  
          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h4 class="mb-0">Para mas información <br> ¡Contactate con nosotros en redes sociales!</h4>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">
  
            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>
  
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row-->
  
      </div>
    </div>
  
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
  
      <!-- Grid row -->
      <div class="row mt-3 dark-grey-text">
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
  
          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Nombre de la empresa</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Centro de acopio y donacion de ropa y calzado.</p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Objetivo</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>Ser una empresa dedicada, poyando con recursos tangibles a la comunidad.</p>
            
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">¿Te gustaria ayudar? registrate como donador</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="#!">Donador</a>
          </p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contactanos</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fas fa-home mr-3"></i> Ciudad de mexico, Toluca</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> donacionesDarc@gmail.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 52 722-250 -7930</p>
     
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2020 Empresa :
      <a class="dark-grey-text" href="https://mdbootstrap.com/"> DARC</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->

</form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>  
   </body>
</html>
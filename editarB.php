<?php
 // conexion bd
 include 'conexion.php';
 
 $result = false ;

 if(!empty ($_POST)){
 
  $id_beneficiado = $_POST['id_beneficiado'];
  $newName = $_POST['Nombre'];
  $newCalle = $_POST['Calle'];
  $newColonia = $_POST['Colonia'];
  $newMunicipio= $_POST['Municipio'];
  $newEdad = $_POST['Edad'];
  $newFecha = $_POST['Fecha'];
 
  $sql = "UPDATE beneficiado SET Nombre = :Nombre, Calle =:Calle, Colonia =:Colonia, Municipio =:Municipio, Edad =:Edad, Fecha =:Fecha WHERE id_beneficiado = :id_beneficiado";
  $query = $pdo->prepare($sql);
  
  
  $result = $query->execute([
    'id_beneficiado' => $id_beneficiado,
    'Nombre' =>$newName,
    'Calle'=> $newCalle,
    'Colonia' => $newColonia,
    'Municipio' => $newMunicipio,
    'Edad' => $newEdad,
    'Fecha' => $newFecha,
  ]);
 
  $nameValue = $newName;
  $CalleValue = $newCalle;
    $ColoniaValue = $newColonia;
    $MunicipioValue = $newMunicipio;
    $EdadValue= $newEdad;
    $FechaValue= $newFecha;
}else{
  $id_beneficiado = $_GET['id_beneficiado'];
   $sql = "SELECT * FROM beneficiado WHERE id_beneficiado = :id_beneficiado";
   $query = $pdo->prepare($sql);
 
   $query->execute([
    'id_beneficiado' => $id_beneficiado
   ]);
 
   $row = $query->fetch(PDO::FETCH_ASSOC);
   $idValue = $row['id_beneficiado'];
   $nameValue = $row['Nombre'];
   $CalleValue = $row['Calle'];
    $ColoniaValue= $row['Colonia'];
    $MunicipioValue = $row['Municipio'];
    $EdadValue = $row['Edad'];
    $FechaValue=$row['Fecha'];
}
 
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

<title>Editar Beneficiado</title>
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
       
      </ul>
    </div>
  </nav> 
 
    <div class="container">
    <a href="listaBeneficiado.php">Regresar</a>
    <?php 
    if($result) {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"> 
                <strong>Los datos  </strong>Se Actualizaron Correctamente
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
               </button>
            </div>';
    }
    ?>
    <div class="row col-md-12 col-lg-12 col-xs-12">
      <h3 class="text-left">
        Modifiación de los datos del Beneficiado
      </h3>
         <Form action= "editarB.php" method="post">
         <br>
         <input class="form-control" type="hidden" name="id_beneficiado" value="<?php echo $idValue?>">
          <label for= "name">Materia</label>
          <input   class="form-control" type="text" name="Nombre" value="<?php echo $nameValue; ?>">
          <label for="name">Calle </label>
          <input class="form-control" type="text" name="Calle" value="<?php echo $CalleValue; ?>">
          <label for="name"> Colonia</label>
         <input class="form-control" type="text" name="Colonia" value="<?php echo $ColoniaValue; ?>">
         <label for="name"> Municipio</label>
<input class="form-control" type="text" name="Municipio" value="<?php echo $MunicipioValue ?>">
<label for="name"> Edad</label>
<input class="form-control" type="text" name="Edad" value="<?php echo $EdadValue ?>">
<label for="name"> Fecha</label>
<input class="form-control" type="text" name="Fecha" value="<?php echo $FechaValue ?>">
          <button class="btn btn-primary" type="submit">Actulizar</button>
         </Form>
 
    </div>
  </div>
 
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>

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
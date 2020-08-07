<?php 
require_once "conexion.php";
$result = false;
if (!empty ($_POST)) {

$Nombre = $_POST['Nombre'];
$Paterno = $_POST['Paterno'];
$Materno = $_POST['Materno'];
$Colonia = $_POST['Colonia'];
$Edad = $_POST['Edad'];
$Sexo = $_POST['Sexo'];

$mysql_query = "INSERT INTO donador( Nombre,Paterno, Materno, Colonia, Edad, Sexo)
   VALUES(:Nombre, :Paterno, :Materno, :Colonia, :Edad, :Sexo)";
$query = $pdo ->prepare($mysql_query);
$result= $query->execute([

'Nombre' =>  $Nombre,
'Paterno' => $Paterno,
'Materno' => $Materno,
'Colonia' => $Colonia,
'Edad' => $Edad,
'Sexo' => $Sexo,
]);
if($result == true){
   echo "Los datos del donador se guardaron correctamente";
}
}
?>
<?php 
require_once "conexion.php";
$result = false;
if (!empty ($_POST)) {
$Nombre = $_POST['Nombre'];
$Calle = $_POST['Calle'];
$Colonia = $_POST['Colonia'];
$Municipio = $_POST['Municipio'];
$Edad = $_POST['Edad'];
$Fecha = $_POST['Fecha'];

$mysql_query = "INSERT INTO beneficiado(Nombre, Calle, Colonia, Municipio, Edad, Fecha)
   VALUES( :Nombre, :Calle, :Colonia, :Municipio, :Edad, :Fecha)";
$query = $pdo ->prepare($mysql_query);
$result= $query->execute([
'Nombre' =>  $Nombre,
'Calle'=> $Calle,
'Colonia' => $Colonia,
'Municipio' => $Municipio,
'Edad' => $Edad,
'Fecha' => $Fecha,
]);
if($result == true){
   echo "el beneficiado se guardo correctamente";
}
}
?>
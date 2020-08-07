<?php 
require_once "conexion.php";
$result = false;
if (!empty ($_POST)) {

$Nombre = $_POST['Nombre'];
$Telefono = $_POST['Telefono'];
$Ubicacion = $_POST['Ubicacion'];

$mysql_query = "INSERT INTO fundacion( Nombre, Telefono, Ubicacion)
   VALUES(:Nombre, :Telefono, :Ubicacion)";
$query = $pdo ->prepare($mysql_query);
$result= $query->execute([

'Nombre' =>  $Nombre,
'Telefono' => $Telefono,
'Ubicacion' => $Ubicacion,
]);
if($result == true){
   echo "Los datos de la Fundacion se guardaron correctamente";
}
}
?>
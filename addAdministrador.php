<?php 
require_once "conexion.php";
$result = false;
if (!empty ($_POST)) {
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$colonia = $_POST['colonia'];
$RFC = $_POST['RFC'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$Iniciar = $_POST['Iniciar'];

$mysql_query = "INSERT INTO administrador(nombre, correo, colonia, RFC, sexo, edad, Iniciar)
   VALUES(:nombre, :correo,  :colonia, :RFC, :sexo, :edad, :Iniciar)";
$query = $pdo ->prepare($mysql_query);
$result= $query->execute([
   'nombre' => $nombre,
   'correo' => $correo,
   'colonia' => $colonia,
   'RFC' => $RFC,
   'edad' => $edad, 
   'sexo' => $sexo,
   'Iniciar' =>$Iniciar,
]);
if($result == true){
   echo "el administrador se registro correctamente";
}

}
?>
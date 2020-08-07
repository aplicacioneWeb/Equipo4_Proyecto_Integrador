<?php
include 'conexion.php';
$id_fundacion = $_GET['id_fundacion'];

$sql = 'DELETE FROM fundacion where id_fundacion =:id_fundacion';
$query  =$pdo->prepare($sql);
$query->execute([
    'id_fundacion'  =>$Clave
     ]);
     header("Location:listaFundacion.php");
?>
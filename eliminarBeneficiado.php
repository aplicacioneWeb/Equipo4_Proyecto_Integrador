<?php
include 'conexion.php';
$id_beneficiado = $_GET['id_beneficiado'];

$sql = 'DELETE FROM beneficiado where id_beneficiado =:id_beneficiado';
$query  =$pdo->prepare($sql);
$query->execute([
    'id_beneficiado'  =>$id_beneficiado 
     ]);
     header("Location:listaBeneficiado.php");
?>
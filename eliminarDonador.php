<?php
include 'conexion.php';
$id_donador = $_GET['id_donador'];

$sql = 'DELETE FROM donador where id_donador =:id_donador';
$query  =$pdo->prepare($sql);
$query->execute([
    'id_donador'  =>$id_donador
     ]);
     header("Location:listaDonador.php");
?>
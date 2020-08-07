<?php
 include 'conexion.php';
 
 $id_administrador = $_GET['id_administrador'];
 
 $sql = 'DELETE FROM administrador  WHERE id_administrador=:id_administrador';
 $query = $pdo->prepare($sql);
 $query->execute([
   'id_administrador' =>$id_administrador
 ]);
 
 header("Location:listaAdministrador.php");
?>
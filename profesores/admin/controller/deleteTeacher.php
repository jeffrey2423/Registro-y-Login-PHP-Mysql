<?php
require 'conexionBD.php'; 

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM docente WHERE id = $id";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'Docente eliminado con exito';
  $_SESSION['message_type'] = 'danger';
  header('Location: ../index.php');
}
?>
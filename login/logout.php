<?php 
  session_start();
  unset($_SESSION["usuario"]);
  unset($_SESSION["senha"]);
  unset($_SESSION["tipo"]);
  session_destroy();
  header("Location: index.php");
  exit;
?>
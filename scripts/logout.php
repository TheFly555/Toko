<?php
$logoutButton = $_POST['logoutButton'];

if (isset($logoutButton)) {
  session_start();
  session_unset();
  session_destroy();
  header("location: ../pages/home.php?logout=succes");
}
 ?>

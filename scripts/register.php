<?php
include_once 'connect.php';

$registerUsername = mysql_real_escape_string($conn, $_POST['registerUsername']);
$registerEmail = $_POST['registerEmail'];
$registerFirstName = $_POST['registerFirstName'];
$registerLastName = $_POST['registerLastName'];
$registerPassword = $_POST['registerPassword'];
$registerSubmit = $_POST['registerSubmit'];

if (isset($registerSubmit)) {

} else {
  header('Location: ../pages/home.php');
  exit();
}
 ?>

<?php
include_once 'connect.php';

$registrerenVoornaam = $_POST['registrerenVoornaam'];
$registrerenAchternaam = $_POST['registrerenAchternaam'];
$registrerenEmail = $_POST['registrerenEmail'];
$registrerenGeboorteDatum = $_POST['registrerenGeboorteDatum'];
$registrerenAdres = $_POST['registrerenAdres'];
$registrerenPlaatsnaam = $_POST['registrerenPlaatsnaam'];
$registrerenWachtwoord = $_POST['registrerenWachtwoord'];
$registrerenConfirmWachtwoord = $_POST['registrerenConfirmWachtwoord'];
$registerSubmit = $_POST['registerSubmit'];

if (isset($registerSubmit)) {
  if ($registrerenConfirmWachtwoord == $registrerenWachtwoord) {

  } else {
    header('Location: ../pages/register.php?register=error');
    exit();
  }
} else {
  header('Location: ../pages/home.php');
  exit();
}
 ?>

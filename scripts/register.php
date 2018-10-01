<?php
session_start();

include_once 'connect.php';

//Manual ID/Index numbers input database
$queryManualId = "SELECT max(id) as 'maxGebruikerId' FROM gebruikers;";
$resultMaxId = $conn->query($queryManualId);
if ($resultMaxId->num_rows > 0) {
  while($row = $resultMaxId->fetch_assoc()) {
    $maxGebruikerId = $row["maxGebruikerId"];
    }
  }

$registrerenId = $maxGebruikerId + 1;
$registrerenVoornaam = $_POST['registrerenVoornaam'];
$registrerenAchternaam = $_POST['registrerenAchternaam'];
$registrerenEmail = $_POST['registrerenEmail'];
$registrerenGeboorteDatum = $_POST['registrerenGeboorteDatum'];
$registrerenAdres = $_POST['registrerenAdres'];
$registrerenPostcode = $_POST['registrerenPostcode'];
$registrerenPlaatsnaam = $_POST['registrerenPlaatsnaam'];

$registrerenWachtwoord = $_POST['registrerenWachtwoord'];
$registrerenConfirmWachtwoord = $_POST['registrerenConfirmWachtwoord'];
$hashedWachtwoord = md5($registrerenWachtwoord);

$registrerenSubmit = $_POST['registrerenSubmit'];

//Check is the submit button is clicked
if (!isset($registrerenSubmit)) {
  header('Location: ../pages/home.php');
  exit();
}
//Check if the passwords are the same
elseif (!$registrerenConfirmWachtwoord == $registrerenWachtwoord) {
  header('Location: ../pages/register.php?register=differentPasswords');
  exit();
}
//
elseif (empty($registrerenVoornaam) ||empty($registrerenAchternaam) ||empty($registrerenEmail) ||empty($registrerenGeboorteDatum) ||empty($registrerenAdres) ||empty($registrerenPostcode) ||empty($registrerenPlaatsnaam) ||empty($registrerenWachtwoord) ||empty($registrerenConfirmWachtwoord)) {
  header('Location: ../pages/register.php?register=empty');
  exit();
}
else {
  $regisrerenQuery = "INSERT INTO gebruikers (id, voornaam, achternaam, email, geboortedatum, adres, postcode, plaats, wachtwoord, admin) VALUES ('$registrerenId', '$registrerenVoornaam', '$registrerenAchternaam', '$registrerenEmail', '$registrerenGeboorteDatum', '$registrerenAdres', '$registrerenPostcode', '$registrerenPlaatsnaam', '$hashedWachtwoord', '0')";
  mysqli_query($conn, $regisrerenQuery);
  header('Location: ../pages/home.php?register=succes');
  exit();
}

 ?>

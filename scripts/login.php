<?php
session_start();
include_once 'connect.php';

$loginEmail = $_POST['loginEmail'];
$loginWachtwoord = $_POST['loginWachtwoord'];
$loginSubmit = $_POST['loginSubmit'];

if (!isset($loginSubmit)) {
  header('Location: ../pages/login.php?login=notSubmitted');
  exit();
}
elseif (empty($loginEmail) || empty($loginWachtwoord)) {
  header('Location: ../pages/login.php?login=empty');
  exit();
} else {
  $loginQuery = "SELECT * FROM `gebruikers` WHERE email = '$loginEmail';";
  $result = mysqli_query($conn, $loginQuery);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck < 1) {
    header('Location: ../pages/login.php?login=notFound');
    exit();

  } else {
    if ($row = mysqli_fetch_assoc($result)) {
       if (md5($loginWachtwoord) ==  $row['wachtwoord']) {
        //login the user
        $_SESSION['gebruikerId'] = $row['id'];
        $_SESSION['gebruikerVoornaam'] = $row['voornaam'];
        $_SESSION['gebruikerAchternaam'] = $row['achternaam'];
        $_SESSION['gebruikerEmail'] = $row['email'];
        $_SESSION['gebruikerAdmin'] = $row['admin'];
        header('Location: ../pages/home.php?login=succes');
        exit();

      }
      elseif (!md5($loginWachtwoord) ==  $row['wachtwoord']) {
        // header('Location: ../pages/login.php?login=invalid');
        // exit();
        echo "hashed check failure";
      } else {
        echo "er is een fout opgetreden";
      }
    }
  }
}


// $resultLoginData = $conn->query($loginQuery);
// if ($resultLoginData->num_rows > 0) {
//   while($row = $resultLoginData->fetch_assoc()) {
//     $userEmail = $row["email"];
//     $userPassword = $row["wachtwoord"];
//     $hashedwachtwoordCheck = password_verify($loginWachtwoord, $userPassword);
//     if ($hashedwachtwoordCheck == False) {
//       header('Location: ../pages/login.php?login=invalid');
//       exit();
//     } elseif ($hashedwachtwoordCheck == True) {
//       //login the user
//       $_SESSION['gebruikerId'] = $row['id'];
//       $_SESSION['gebruikerVoornaam'] = $row['voornaam'];
//       $_SESSION['gebruikerAchternaam'] = $row['achternaam'];
//       $_SESSION['gebruikerEmail'] = $row['email'];
//       $_SESSION['gebruikerAdmin'] = $row['admin'];
//       header('Location: ../pages/home.php?login=succes');
//       exit();
//     } else {
//       echo "er is een fout opgetreden";
//     }
//     }
//   }

 ?>

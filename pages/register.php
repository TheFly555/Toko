<!doctype html>
<html lang="en">
  <head>
    <?php include_once 'templates/header.php'; ?> <!--include header-->
    <title>Portfilio</title> <!--titel portfolio pages-->
  </head>
  <body>
    <?php include_once 'templates/navbar.php'; ?>

    <div class="containter">
      <div class="col-md-6 centerpage">
        <h1>Registreren</h1>
        <form class="" action="../scripts/register.php" method="post">
          <table>
            <tr>
              <td><h4>Voornaam:</h4></td>
              <td><input class="form-control" type="text" name="registrerenVoornaam" placeholder="Voornaam" maxlength="55"></td>
            </tr>
            <tr>
              <td><h4>Achternaam:</h4></td>
              <td><input class="form-control" type="text" name="registrerenAchternaam" placeholder="Achternaam" maxlength="55"></td>
            </tr>
            <tr>
              <td><h4>E-mail:</h4></td>
              <td><input class="form-control" type="email" name="registrerenEmail" placeholder="E-mail" maxlength="55"></td>
            </tr>
            <tr>
              <td><h4>Geboorte datum:</h4></td>
              <td><input class="form-control" type="date" name="registrerenGeboorteDatum"></td>
            </tr>
            <tr>
              <td><h4>Adres + huisnr:</h4></td>
              <td><input class="form-control" type="text" name="registrerenAdres" placeholder="Adres + huisnr" maxlength="55"></td>
            </tr>
            <tr>
              <td><h4>Postcode</h4></td>
              <td><input class="form-control" type="text" name="registrerenPostcode" placeholder="Postcode" maxlength="7"></td>
            </tr>
            <tr>
              <td><h4>Plaatsnaam:</h4></td>
              <td><input class="form-control" type="text" name="registrerenPlaatsnaam" placeholder="Plaatsnaam" maxlength="55"></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><h4>Wachtwoord:</h4></td>
              <td><input class="form-control" type="password" name="registrerenWachtwoord" placeholder="Wachtwoord" maxlength="55"></td>
            </tr>
            <tr>
              <td><h4>Bevestig wachtwoord:</h4></td>
              <td><input class="form-control" type="password" name="registrerenConfirmWachtwoord" placeholder="Wachtwoord" maxlength="55"></td>
            </tr>
            <tr>
              <td></td>
              <td><input class="form-control" style="cursor: pointer;" type="submit" name="registrerenSubmit" value="Registreer"></td>
            </tr>
            <tr>
              <td></td>
              <td><p>Heb je al een account? <a href="login.php">Log hier in.</a></p></td>
            </tr>
          </table>
        </form>
        <br>
        <br>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <?php include_once 'templates/footer.php'; ?>
  </body>
</html>

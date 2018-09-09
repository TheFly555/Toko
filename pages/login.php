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
        <h1>Login</h1>
        <form class="" action="../scripts/register.php" method="post">
          <table>
            <tr>
              <td><h4>E-mail:</h4></td>
              <td><input class="form-control" type="email" name="loginEmail" placeholder="E-mail" maxlength="55"></td>
            </tr>
            <tr>
              <td><h4>Wachtwoord:</h4></td>
              <td><input class="form-control" type="Wachtwoord" name="loginWachtwoord" placeholder="Wachtwoord" maxlength="55"></td>
            </tr>
            <tr>
              <td></td>
              <td><input class="form-control loginSubmit" type="submit" name="loginSubmit" value="Login"></td>
            </tr>
            <tr>
              <td></td>
              <td><p>Heb je nog geen account? <a href="register.php">Registreer hier.</a></p></td>
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

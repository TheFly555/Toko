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
        <h1>Regestreren</h1>
        <form class="" action="../scripts/register.php" method="post">
          <table>
            <tr>
              <td><h4>Username:</h4></td>
              <td><input class="form-control" type="text" name="registerUsername" placeholder="Username"></td>
            </tr>
            <tr>
              <td><h4>E-mail:</h4></td>
              <td><input class="form-control" type="email" name="registerEmail" placeholder="E-mail"></td>
            </tr>
            <tr>
              <td><h4>First name:</h4></td>
              <td><input class="form-control" type="text" name="registerFirstName " placeholder="Username"></td>
            </tr>
            <tr>
              <td><h4>Last name:</h4></td>
              <td><input class="form-control" type="text" name="registerLastName" placeholder="Username"></td>
            </tr>
            <tr>
              <td><h4>Password:</h4></td>
              <td><input class="form-control" type="password" name="registerPassword" placeholder="Password"></td>
            </tr>
            <tr>
              <td></td>
              <td><input class="form-control" style="cursor: pointer;" type="submit" name="registerSubmit" value="Registreer"></td>
            </tr>
          </table>
        </form>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <?php include_once 'templates/footer.php'; ?>
  </body>
</html>

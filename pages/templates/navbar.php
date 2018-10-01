<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="home.php">Toko!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
    </ul>

    <?php
    //Login,Rigister,logout button script
    if (isset($_SESSION['gebruikerId'])) {
      echo "
      <form class='logoutForm' action='../scripts/logout.php' method='POST'>
         <button class='btn btn-secondary my-2 my-sm-0' type='submit' name='logoutButton'>Logout</button>
      </form>";
    } else {
      echo "
      <form class='form-inline my-2 my-lg-0 button-navbar' action='register.php'>
        <button class='btn btn-secondary my-2 my-sm-0' type='submit'>Register</button>
        </form>
        <form class='form-inline my-2 my-lg-0 button-navbar' action='login.php'>
        <button class='btn btn-secondary my-2 my-sm-0' type='submit'>Login</button>
      </form>";
    }
     ?>
   </div>
</nav>

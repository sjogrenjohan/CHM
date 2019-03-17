<header>
    <div class="container-fluid position-relative">
        <div class="row">
            <div class="col-sm">
                <h1 class="display-1 text-center"><a class="nav-link" style="color: white;" href="./index.php">CHM</a></h1>
                <p class="text-center">When Quality Matters</p>
            </div>
        </div>
    </div>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="./categoryPage.php">Alla produkter <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./index.php">Startsida</a>
          </li>
          <li class="nav-item active">
          <?php session_start(); if(isset($_SESSION["loggedinAdmin"])) : ?>
            <a class="nav-link" href="./admin/admin.php" id="adminButton">Admin</a>
            <?php else : ?>
           
            <?php endif ; ?>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">

            <?php  if( isset($_SESSION['loggedinCostumer']) || isset($_SESSION["loggedinAdmin"])) : ?>
              <a class="nav-link" href="index.php" >
                <i class="cartStyle fas fa-user"></i>
                <span id="LogInLogOut"  onclick="jagGerUpp();">Logga ut</span>
              </a>
              <?php else : ?>
              <a class="nav-link" href="./login.php">
                <span id="LogInLogOut">Logga in</span>
                <i class="cartStyle fas fa-user"></i>
              </a>
              <?php endif ; ?>

            </li>
            <li class="nav-item active">           
              <a class="nav-link" href="cartPage.php"><span id="amountCount"></span> <i class="cartStyle fas fa-shopping-cart"></i></a>
            </li>
          </ul>
        </form>
      </div>
    </nav>
</header>
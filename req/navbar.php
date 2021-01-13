<nav class="navbar navbar-expand-lg  fixed-top navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="img/logo.svg" alt="" width="30" height="25" class="d-inline-block align-top">
      AMOIL
    </a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if ($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/index.php") {
    }
    ?>
    <div class=" collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="ml-md-auto navbar-nav">
        <li class="nav-item">
          <a href="#" class="nav-link pl-2 pr-1 mx-1 py-3 my-n2" aria-label="Panier">
            <i class="bi bi-cart4" style="font-size: 1rem;"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link pl-2 pr-1 mx-1 py-3 my-n2" aria-label="favoris">
            <i class="bi bi-heart-fill" style="font-size: 1rem;"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" id="navbarDropdownAccount" class="nav-link dropdown-toggle  pl-2 pr-1 mx-1 py-3 my-n2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Compte">
            <i class="bi bi-person-circle" style="font-size: 1rem;"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAccount">
            <?php
            if (!isset($_SESSION["user_id"])) {
            ?>

              <form class="px-4 py-3">
                <div class="form-group">
                  <label for="exampleDropdownFormEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                </div>
                <div class="form-group">
                  <label for="exampleDropdownFormPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">
                      Remember me
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
              </form>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">New around here? Sign up</a>
              <a class="dropdown-item" href="#">Forgot password?</a>
            <?php
            } else {
            ?>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            <?php
            }
            ?>
          </div>
        </li>
      </ul>


    </div>
  </div>
</nav>
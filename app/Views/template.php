<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <script src="https://kit.fontawesome.com/60304f5951.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <?php 
    if(isset($assets['css'])){
      echo load_css($assets['css']);
    }
    ?>
    <script src="assets/js/jquery-3.6.3.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-white bg-white">
    <div class="container-fluid" style="width: 50%">

        <img src="assets/img/Logo-Sterk-Huis-payoff-onder.png" href="index.php" style="width: 80px; margin-right: 10%;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link nav_hover" href="index.php">Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav_hover" href="index.php">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav_hover" href="index.php">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav_hover" href="index.php">About</a>
                </li>
                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle nav_hover" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>


                </li>
            </ul>
            <a <img src=""
                dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-left" id="dropdown" aria-labelledby="navbarDropdownMenuLink">
                <li>
                    <div class="input-group mt-2 mx-2">
                        <div class="form-outline w-auto">
                            <input type="search" id="form1" class="form-control-dropdown" />
                            <label class="form-label" for="form1">Search</label>
                        </div>
                    </div>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item " href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
</nav>
	<?=view($view); ?>

  <?php 
  if(isSet($assets['js'])){
    echo load_js($assets['js']);
  }
  ?>

</body>
</html>
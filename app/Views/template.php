<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <script src="https://kit.fontawesome.com/60304f5951.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <?php 
    if(isset($assets['css'])){
      echo load_css($assets['css']);
    }
    ?>
    <script src="assets/js/jquery-3.6.3.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</head>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/Home">Web 2023</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/Home">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/Memories">Memory</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/Contacts">Contact</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/smart_houses">Smart house</a>
          </li>
        </ul>
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
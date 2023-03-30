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
<div class="top-bar"></div>
<nav class="navbar navbar-expand-lg navbar-white bg-white">
    <div class="container-fluid" style="width: 50%">

        <img src="assets/img/Logo-Sterk-Huis-payoff-onder.png" href="index.php" style="width: 100px; margin-right: 10%;">
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
                <li class="nav-item" style="margin-left: 50px"">
                    <a class="nav-link nav_hover" href="index.php">Features</a>
                </li>
                <li class="nav-item" style="margin-left: 50px">
                    <a class="nav-link nav_hover" href="index.php">Pricing</a>
                </li>
                <li class="nav-item" style="margin-left:50px">
                    <a class="nav-link nav_hover" href="index.php">About</a>
                </li>
                <li class="nav-item dropdown" style="margin-left: 50px">
                    <a class="nav-link dropdown-toggle nav_hover" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                </li>
                <li class="nav-item" style="margin: 7px 0px 0px 50px">
                    <a id="dropdown_button"><i class="fa-solid fa-magnifying-glass fa-lg"></i></a>
                </li>
            </ul>
            <ul class="dropdown-menu dropdown-menu-left" id="dropdown" aria-labelledby="navbarDropdownMenuLink">
                    <!-- Search form with label, input, and button -->
                <li>
                    <h1 class="text-search">Wat zoek je?</h1>
                    <div class="find-search">
                        <label for="search-input" class="sr-only">Search</label>
                        <input type="search" id="search-input" class="search-input" placeholder="Search...">
                        <button type="submit" class="search-button">Zoeken</button>
                    </div>
                </li><br>
                <h1 class="text-search2">Vaker opgezocht</h1>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item " href="#">Mijn foto's zijn verstuurd</a></li>
                <li><a class="dropdown-item" href="#">Ik heb een stalker</a></li>
                <li><a class="dropdown-item" href="#">Is sexting veilig?</a></li>
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

<!--Chat function-->
<div id="chat-widget">
    <div id="chat-widget-header">
        <h3>Live Chat</h3>
        <button class="close-button" onclick="hideChatWidget()">&times;</button>
    </div>
    <div id="chat-widget-body">
        <div class="message-received">
            <span class="message-sender">Sterk Huis:</span>
            <span class="message-text">Welcome to our live chat. How may we assist you?</span>
        </div>
        <div class="message-sent">
            <span class="message-sender">Jij:</span>
            <span class="message-text">Hi, I have a question about your services.</span>
        </div>
        <div class="message-received">
            <span class="message-sender">Sterk Huis:</span>
            <span class="message-text">Sure, what would you like to know?</span>
        </div>
    </div>
    <textarea id="chat-widget-input" placeholder="Type your message..."></textarea>
    <div id="chat-widget-footer">
        <button onclick="sendMessage()">Send</button>
    </div>
</div>

<button id="chat-widget-button" class="chat-widget-button" onclick="showChatWidget()">Chat</button>


</body>
</html>
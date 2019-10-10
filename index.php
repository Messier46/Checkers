
<!doctype html>

<html>
<head>
    <?php
    
    session_start();
    $_SESSION['userPic1'] = 'url(checkPcsImg/Stop_Sign_Trans.png)';
    $_SESSION['userPic2'] = 'url(checkPcsImg/Go_Sign.png)';
    $pick1 = $_SESSION['userPic1'];
    $pick2 = $_SESSION['userPic2'];    
    
?>
    
  <title>HTML5 Checkers</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    
    
  <link rel="stylesheet" type='text/css' href="style.php"  media="screen">
    
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.png" type="image/x-icon">
  <script src="script.js"></script>
</head>
<body>
  <div class="column">
    <!--<div class="info">
      <h1>Checkers</h1>
        Temporary settings button
        <button><a href="settings.php">Settings</a></button>
      <hr>
      
    </div>-->
    <div class="stats">
      <h2>Game Statistics</h2>
      <div class="wrapper">
      <div id="player1">
        <h3>Player 1 (Top)</h3>
      </div>
      <div id="player2">
        <h3>Player 2 (Bottom)</h3>
      </div>
      </div>
      <div class="clearfix"></div>
      <div class="turn"></div>
      <span id="winner"></span>
      
    </div>
  </div>
  <div class="column">
    <div id="board">
      <div class="tiles"></div>
      <div class="pieces">
        <div class="player1pieces">
            <div class="king">
            </div>
        </div>
        <div class="player2pieces">
            <div class="king">
            </div>
        </div>
      </div>
  </div>
</body>
</html>
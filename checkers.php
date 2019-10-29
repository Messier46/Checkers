<?php
    session_start();
    $_SESSION['accountIdP2'] = 2;
    $_SESSION['userPic2'] = "";
    
    require_once("connect-db.php");
    $sql = "select * from setting";
    $statement1 = $db->prepare($sql); 
    if($statement1->execute()) {
//        an array is created, called $orders
        $accounts = $statement1->fetchAll();
        if($accounts == null) {
            $error = "No accounts found";
        }
        $statement1->closeCursor();
    }
    else {
        $error = "Error finding orders.";
    }
    
    foreach($accounts as $account){
        if($account["accountId"] == $_SESSION['accountIdP2']){
            $_SESSION['userPic2'] = $account['pieceColor'];
            
        }
    }

?>
<!DOCTYPE html>

<html>
<head>
    
    
  <title>HTML5 Checkers</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
  <link rel="stylesheet" type='text/css' href="style.php"  media="screen">
    
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.png" type="image/x-icon">
  <script src="script.js"></script>
</head>
<body>
    
  <div class="column">
    
      <button><a href="settings.php">Button</a></button>
      
      <!--Display player stats-->
    <div class="stats">
      <h2>Game Statistics</h2>
      <div class="wrapper">
      <div id="player1">
        <h3>Player 1 <span class="statTxt">(Top)</span></h3>
      </div>
      <div id="player2">
        <h3>Player 2 <span class="statTxt">(Bottom)</span></h3>
      </div>
      </div>
      <div class="clearfix"></div>
      <div class="turn"></div>
      <span id="winner"></span>
      
    </div>
  </div>
  <div class="column boards">
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
    </div>
        
        
        
</body>
</html>
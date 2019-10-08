<!DOCTYPE html>
<? 
    session_start();
    
    $pick1 = $_SESSION['userPic1'];
    

    
?>
<html>
  <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.png" type="image/x-icon">
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Settings</title>
  <link rel="stylesheet" href="styleAddon.css" type="text/css">
      
  </head>
  <body>
      <div class="container">
          <div class="row">
            <div class="col-lg-6">
                <h1>Select your board color</h1>
                <img src="checkBoardImg/blackngray.jpg">
                
                <img src="checkBoardImg/blacknteal.jpg">
                <img src="checkBoardImg/blacknwhite.jpg">
                <img src="checkBoardImg/bluencyan.jpg"
              </div>
            </div>
        
            <div class="col-lg-6">
                <h1>Select your piece color</h1>
                <img onclick="<?$pick1 = 'checkPcsImg/Checkersblue.png'?>" src="checkPcsImg/Checkersblue.png">
                <img src="checkPcsImg/Go_Sign.png">
                <img src="checkPcsImg/Stop_Sign_Trans.png">
                <img src="checkPcsImg/Checkersblack.png">
                </div>
          <!--Temporary settings button-->
        <button><a href="index.php">Settings</a></button>
      </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js" type="text/javascript"></script>
  </body>
</html>
<?php
$servername = "localhost";
$username = "what7aba_wc";
$password = "My Password";
$dbname = "what7aba_wc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, number FROM WC";
$result = $conn->query($sql);

?>
  <h1>Leaderboard</h1>
  <h2>Table was last updated ---</h2>

  <div class="table-responsive-vertical shadow-z-1">
  <table id="table" class="table table-hover table-mc-light-blue">
      <thead>
        <tr>
          <th>Name</th>
          <th>Link</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-title="Name"><p><?php echo $row["name"] ?><p></td>
          <td data-title="Number"><p><?php echo $row["number"] ?></p></td>
         </tr>

      </tbody>
    </t
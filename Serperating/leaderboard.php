<?php
	$rank = 1;
    $error = "";
	// sets up sql statement that returns the 10 accts with the highest number of wins
    require_once("connect-db.php");
    $sql = "select * FROM account
	ORDER BY winCount DESC
	LIMIT 10";
	// executes sql statement and checks for errors. Returns the top 10 accts or displays error messages for user
    $statement1 = $db->prepare($sql);
    if($statement1->execute()){
        $accounts = $statement1->fetchAll();
		// if the statement executes successfully and returns nothing, it will throw the user a message letting them know there were no accounts found.
        if($accounts == null){
            $error = "No accounts found";
        }
        $statement1->closeCursor();
    }else
	// if the sql statement doesnt run at all, the user gets thrown a message letting them know there was an error. 
	{
        $error = "Error finding accounts";
    }
?>

<!DOCTYPE html>
<html>
<button id="backButton" onclick="history.go(-1);">Back to Menu</button>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Checkers</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="leaderboard-stylesheet.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Top 10 Checkers Leaderboard</h1>
				<table class="table">
					<tr>
						<th>Rank</th>
						<th>Player</th>
						<th>Win Count</th>
						<th>Loss Count</th>
						<th>Total Games Played</th>
					</tr>
					<?php
                    foreach($accounts as $account){
                    ?>
					<tr>
						<td id="rank">
							<?php
					if($rank == 1){ ?>
							<img id="crown" src="img/crown.png" class="img-fluid">
							
							<?php } ?>
					<?php
					if($rank > 1){ 
							echo $rank;
							
							 }
							$rank ++;
			?>
						</td>
						<td>
							<?php echo $account["username"];?>
						</td>
						<td>
							<?php echo $account["winCount"];?>
						</td>
						<td>
							<?php echo $account["lossCount"];?>
						</td>
						<td>
							<?php echo $account["winCount"] + $account["lossCount"];?>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>

</body>

</html>

<?php
	echo '<!DOCTYPE html>
			<html>
			<head>
				<title>PuppyFace</title>
				<link rel="stylesheet" href="finalproject.css" type="text/css">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			</head>
			<body>
				<a href="https://www.tjhsst.edu/~2016jnguyen2/Final%20Project/index.html"> &nbsp Back to Main Page</a>
				<h1 id="Puppyface">PuppyFace</h1>
				<a href="https://www.tjhsst.edu/~2016jnguyen2/Final%20Project/game.php" class="action-button shadow animate blue" id="rank">Pass</a>';

	$db = new SQLite3('dogs.db');
	$count = 0;
	$count1 = 0;
	$rand1 = 0;
	$rand2 = 0;
	$result = $db->query('SELECT * FROM dogInfo');
	while ($row = $result->fetchArray()) 
	{
		$count = $count + 1;
	}
	while($rand1 == $rand2){
		$rand1 = rand(1, $count);
		$rand2 = rand(1, $count);
	}
	while ($row = $result->fetchArray()) 
	{
		$count1 = $count1 + 1;
		if($rand1 == $count1){
			echo '<div id="rightDog" value="'.$rand1.'">';
			//echo '<a href="https://www.tjhsst.edu/~2016jnguyen2/Final%20Project/game.php?winner='.$rand1.'&loser='.$rand2'"><img src="'.$row['url'].'" class="img-circle" alt="Cinque Terre" width="300" height="300">';
			echo '<a href="https://www.tjhsst.edu/~2016jnguyen2/Final%20Project/game.php"><img src="'.$row['url'].'" class="img-circle" alt="Cinque Terre" width="300" height="300">';
			echo '<br></a>';
			echo '<caption id="caption1">'.$row['name'].'</caption>';
			echo '</div>';
		}
		else if($rand2 == $count1){
			echo '<div id="leftDog" value="'.$rand2.'">';
			//echo '<a href="https://www.tjhsst.edu/~2016jnguyen2/Final%20Project/game.php?winner='.$rand1.'&loser='.$rand2'"><img src="'.$row['url'].'" class="img-circle" alt="Cinque Terre" width="300" height="300">';
			echo '<a href="https://www.tjhsst.edu/~2016jnguyen2/Final%20Project/game.php"><img src="'.$row['url'].'" class="img-circle" alt="Cinque Terre" width="300" height="300">';
			echo '<br></a>';
			echo '<caption id="caption1">'.$row['name'].'</caption>';
			echo '</div>';
		}
	}
	echo '</body></html>';
?>
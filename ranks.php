<?php
	
	$link = $_REQUEST['link'];
	$name = $_REQUEST['name'];
	echo '<!DOCTYPE html>
			<html>
			<head>
				<title>PuppyFace</title>
				<link rel="stylesheet" href="finalproject.css" type="text/css">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			</head>
			<body>
				<a href="https://www.tjhsst.edu/~2016jnguyen2/Final%20Project/index.html"> &nbsp Back to Main Page</a>
				<h1 id="Puppyface">PuppyFace</h1>';

	$db = new SQLite3('dogs.db');
	$count = 0;
	$result = $db->query('SELECT * FROM dogInfo');
	while ($row = $result->fetchArray()) 
	{
		$count = $count + 1;
		echo'<li"><a href="https://www.tjhsst.edu/~2016jnguyen2/Final%20Project/ranks.php?link='.$row['url'].'&name='.$row['name'].'">#'.$count.'&nbsp'.$row['name'].'</a></li><br>';
	}
	/*
	echo '
			<h2 class="newh3">'.$name.'</h2>
			<img src="'.$link.'" class="img-circle" alt="Cinque Terre" width="300" height="300" id="onedog"><ul>';
	echo '</ul></body></html>';*/
	echo '<div id="centerDog">';
	//echo '<a href="https://www.tjhsst.edu/~2016jnguyen2/Final%20Project/game.php?winner='.$rand1.'&loser='.$rand2'"><img src="'.$row['url'].'" class="img-circle" alt="Cinque Terre" width="300" height="300">';
	echo '<img src="'.$link.'" class="img-circle" alt="Cinque Terre" width="300" height="300">';
	echo '<br></a>';
	echo '<caption id="caption1">'.$name.'</caption>';
	echo '</div>';
?>
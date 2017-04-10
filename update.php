<?php

$name = "'".$_POST["name"]."'"; 

$url = "'".$_POST["url"]."'";

$wins = '0';

$losses = '0'; 

$db = new SQLite3('dogs.db');

//$db->exec('CREATE TABLE dogInfo (name varchar(30), url varchar(200), wins int(0), losses int(0))');
$db->exec("INSERT INTO dogInfo (name, url, wins, losses) VALUES ($name, $url, $wins, $losses)");

/*
print "<table border=1>";
print "<tr><td>name</td><td>url</td><td>wins</td><td>losses</td></tr>";
$result = $db->query('SELECT * FROM dogInfo');
while ($row = $result->fetchArray()) 
{
	print "<tr><td>".$row['name']."</td>";
	print "<td>".$row['url']."</td>";
	print "<td>".$row['wins']."</td>";
	print "<td>".$row['losses']."</td></tr>";

}
print "</table>";

*/

header('Location: add.html');
//Fields - First Name, Last Name, Street, State, Country, apt(optional)
?>
<?php
$db = new SQLite3('dogs.db');
$count = 0;
print "<table border=1>";
print "<tr><td>name</td><td>url</td><td>wins</td><td>losses</td></tr>";
$result = $db->query('SELECT * FROM dogInfo');
while ($row = $result->fetchArray()) 
{
	print "<tr><td>".$row['name']."</td>";
	print "<td>".$row['url']."</td>";
	print "<td>".$row['wins']."</td>";
	print "<td>".$row['losses']."</td></tr>";
	$count = $count + 1;

}
print "</table>";
print $count;
//print $num_columns;
?>
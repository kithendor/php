<?php

include ("connection.php");


$select = "SELECT * FROM pinaka";
$result = $dbcon->query($select);

echo "<table border='1'>";
echo "<tr><th>id</th> <th>name</th> <th>lname</th> <th>phone</th> <th>mail</th>  </tr>";
while($row = $result->fetch_assoc())
{
	echo "<tr> <td>".$row['id']."</td> 
				<td>".$row['name']."</td> 
				<td>".$row['lastname']."</td> 
				<td>".$row['phone']."</td> 
				<td>".$row['email']."</td> 
		</tr>";
}
echo "</table>";


// echo "<table border='1'>";
// $x = 1;

// while ($x<5) {
// 	echo "<tr><td>1</td><td>2</td></tr>";
// }
// echo "</table>";


?>
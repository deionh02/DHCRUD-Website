<?php
$dbhost = 'localhost';
$dbuser = 'deion';
$dbpass = 'deionh02';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn){
	die('Could not connect: ' .mysql_error());
}

$sql = 'SELECT Athlete_Name, Sport, Gender';
mysql_select_db('Athlete');
$retval = mysql_query( $sql, $conn);

if(! $retval ){
	die('Could not get data: ' . mysql_error());
}

$Sport= $row[0];
$SportName = $row[1];
$Gender = $row[2];

	while($row = mysql_fetch_assoc($retval)){
		// The following few lines store information from specific cells in the data about an image
		echo "<TR>";
		echo "<TD>Athlete_Name:".$row['Athlete_Name']. "_Sport:". $row['Sport']. "_".$row['Gender'] ."Gender</TD>";
		echo "<TD><form action= 'update.php' method = 'post'>";
		echo "<button name = 'update'  type = 'submit' value =".$row['Athlete_Name'].">Edit</button></FORM>";
		echo "<TD><form action= 'delete.php' method = 'post'>";
		echo "<button name = 'delete'  type = 'submit' value =".$row['Athlete_Name'].">Delete</button></FORM>";
		echo "</TR>";
	}
	
	echo "Fetched data successfully\n";
	
	mysql_close($conn);


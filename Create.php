<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {//Check it is coming from a form
    
	$mysql_host = "localhost";
	$mysql_dbname ="Athlete";
	$mysql_username = "deion";
	$mysql_password = "deionh02";
	
	$AthleteName = $_POST["AthleteName"];
	$sport = $_POST["What Sport"];
	$Gender = $_POST["What Gender"];
	
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
	
		$statement = $mysqli->prepare("INSERT INTO player (AthleteName, sport, gender) VALUES(?, ?, ?)"); //prepare sql insert query
		//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
		$statement->bind_param('sss', $AthleteName, $sport, $Gender); //bind value
		if($statement->execute())
			{
				//print output text
				echo nl2br($AthleteName .""."has been added to the table");
			}
			else{
					print $mysqli->error; //show mysql error if any 
				}
echo"<br><form action= 'update.php' method = 'get'>";
echo "<input name = 'action'   type = 'submit' value = 'Go Back'></form>";
         }
else{
    echo ("error");
    }         
?>
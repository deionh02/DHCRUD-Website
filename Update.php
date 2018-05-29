<HTML>
    <head></head>
    <body>
<?php
//update_delete.php
if ($_GET['action'] == 'Go Back') 
    {
             //action for No
        header('Location: template.html');
        exit;   
    }
else
    {
        echo $playerID;
        echo"<HEAD> <link rel='stylesheet' href='styles.css'></HEAD>";
    
        require_once 'login.php';
        $conn = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
            if ($conn->connect_error) 
            {
             die("Connection failed: " . $conn->connect_error);
            }

	
        $sql = "SELECT * FROM student WHERE studentID='" . $_POST['update'] . "'";
        $result = $conn->query($sql);

        $Sport = $row[0];
        $AthleteName = $row[1];
        $Gender = $row[2];
        
        if ($result->num_rows > 0)//will only do this if there is something to be returned from the above line
	        {
                while($row = $result->fetch_assoc())
		            {
                        // HTML to display the form on this page.
                        echo"Edit the information for".$row['Athlete_Name'].".";
	                    echo "<TABLE><TR><TH>Athlete_Name</TH><TH>Gender</TH><TH>Sport</TH></TR>";
                        echo "<TR>";
	                    echo "<TD><TD>". $row['Athlete_Name']. "</TD><TD>". $row['Sport']. "</TD><TD>".$row['Gender'] ."</TD></TR>";
	                    echo "<form action='changeItem.php' method = 'post'>";
	                    echo "<TR><TD><input type='text' name =  value=".$row['playerID']." class='field left' readonly></TD>";
                        echo "<TD><input type='text' placeholder='Full Name' name='lastName' class='advancedSearchTextBox'></TD>";
                        echo "<TD><select id='select' name='className'>";
                        echo "<option value='Basketball' >Basketball</option>";
                        echo "<option value='Soccer' >Soccer</option>";
                        echo "<option value='Football' >Football</option>";
                        echo "<option value='Fortnite Pros' >Fortnite Pros</option>";
                        echo "</select></TD>";
                        echo "<TD><select id='select' name='gender'>";
                        echo "<option value='male' >male</option>";
                        echo "<option value='female' >female</option>";
                        echo "</select></TD></TR></TABLE>";
                        echo "<input name = 'create' type = 'submit' value = 'Submit Changes'>";
                        echo "</form>";
	                    
	                    
                    } 
                 echo "</body>";   
	        }
    }
?>
</HTML>

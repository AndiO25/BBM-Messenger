<? session_start();
/***************************************************************
	* Purpose: CRUD Code Snippets
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 13-Dec-2016	
****************************************************************/
?>
<!DOCTYPE html>
<html lang="en">
<body>
  	<center>
	  <h1>Administration</h1>
	  <p></p>
			<!-- ***************************** HTML Comment Line ********************************************************-->
			<? 	

				CreateTable("TeamMembers","#Users","UserID", "TeamID"); 
			
			?>
	</center>
</body>
</html>

<?
/////////////////////////////////////////////////////////////////////////////////////////////////////////
function CreateTable($tablename,$id, $col1, $col2)
{
/***************************************************************
	* Prupose: Creates a simple 4 column table with a primary key
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 9-Jan-2017
	* ADDED: Character set default to be UTF8 when the table is created 	
****************************************************************/

		echo "<h3>Creating a table called $tablename with column named the following. $id, $col1, $col2, $col3 </h3>";
		$query="CREATE TABLE IF NOT EXISTS $tablename(
			$id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 			
			$col1 VARCHAR(255),
			$col2 VARCHAR(255),
			Added_On TIMESTAMP
			) CHARSET utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ";

		include "Student6.ConnectString.php";
		$connect = mysqli_connect($host_name, $user_name, $password, $database);
		if (mysqli_query($connect, $query)) 
		{
		    echo "Table: $tablename was created successfully";
		} else {
		    echo "Error creating table: $tablename" . mysqli_error($connect);
		}
		mysqli_close($connect);
		
	return;
} // end function
/////////////////////////////////////////////////////////////////////////////////////////////////////////
?>	
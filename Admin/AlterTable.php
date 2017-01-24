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
		  <h1>CRUD Functions</h1>
		  <p>This code is to be used as code snippets</p>
				<!-- ***************************** HTML Comment Line ********************************************************-->
				<?
					AlterTable("Users","UserAge","Status"); 
				?>
			
	  </center>
</body>
</html>

<?
/////////////////////////////////////////////////////////////////////////////////////////////////////////
function AlterTable($tablename, $AfterColumnName, $NewColumn1)
{
/***************************************************************
	* Prupose: Creates a simple 4 column table with a primary key
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 13-Dec-2016	
****************************************************************/
		echo "<h3>Altering a table called $tablename with column named:$NewColumn1 appearing after the column named:$AfterColumnName</h3>";
		
		$query="ALTER TABLE $tablename ADD $NewColumn1 VARCHAR(255) AFTER $AfterColumnName;";
		include "Student6.ConnectString.php";
		$connect = mysqli_connect($host_name, $user_name, $password, $database);
		if (mysqli_query($connect, $query)) 
		{
		    echo "Table: $tablename was altered successfully";
		} else {
		    echo "Error altering table: $tablename" . mysqli_error($connect);
		}  // if (mysqli_query($connect, $query)) 
		mysqli_close($connect);
		
	return;
} // end function
/////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
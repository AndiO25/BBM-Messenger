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
	  <h1>Drop Table</h1>
	  <p>Drops the Team Member Table</p>
			<!-- ************************************************************************************-->
			<?
				DropTable("TeamMembers");
			?>
	</center>
</body>
</html>

<?
/////////////////////////////////////////////////////////////////////////////////////////////////////////
function DropTable($tablename)
{
/***************************************************************
	* Prupose: Drops (removes) and existing table
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 13-Dec-2016	
****************************************************************/	
		$query="DROP TABLE IF EXISTS $tablename";
		include "Student6.ConnectString.php";
		$connect = mysqli_connect($host_name, $user_name, $password, $database);
		if (mysqli_query($connect, $query)) 
		{
		    echo "Table: $tablename was dropped successfully";
		} else {
		    echo "Error dropping table: $tablename" . mysqli_error($connect);
		} //end if (mysqli_query($connect, $query)) 
		mysqli_close($connect);
		
	return;
} // end function
////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
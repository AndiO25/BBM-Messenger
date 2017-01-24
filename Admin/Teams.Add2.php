<? session_start();
/***************************************************************
	* Purpose: ADD User Email and Password by Admin
	* Created By: Allan Miller
	* Created On: 15-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 15-Dec-2016	
****************************************************************/

								//===== This is how you get data from a HTML form =====
								$tablename="Teams";
								$ColumnName1="TeamID";
								$ColumnValue1=htmlspecialchars($_POST['TeamID']);
								$ColumnName2="TeamCaptainUserID";
								$ColumnValue2=htmlspecialchars($_POST['TeamCaptainUserID']);
								$ColumnName3="TeamName";
								$ColumnValue3=htmlspecialchars($_POST['TeamName']);
								$ColumnName4="TeamImage";
								$ColumnValue4=htmlspecialchars($_POST['TeamImage']);
							

	
				$NewRowID=AddNewRow($tablename, $ColumnName1, $ColumnValue1,$ColumnName2, $ColumnValue2,$ColumnName3, $ColumnValue3,$ColumnName4, $ColumnValue4);
			?>
	</center>
</body>
</html>

<?
/////////////////////////////////////////////////////////////////////////////////////////////////////////
function AddNewRow($tablename, $ColumnName1, $ColumnValue1,$ColumnName2, $ColumnValue2, $ColumnName3, $ColumnValue3,$ColumnName4, $ColumnValue4)
{
	/***************************************************************
	* Prupose: Adds a new row to an existing table
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 13-Dec-2016	
****************************************************************/
		
		$sql="INSERT INTO $tablename ($ColumnName1, $ColumnName2, $ColumnName3, $ColumnName4) 
		VALUES('$ColumnValue1', '$ColumnValue2','$ColumnValue3', '$ColumnValue4')";
		
		echo $sql;		

		include "Student6.ConnectString.php";
		if (mysqli_query($connect, $sql)) 
			{
				$NewRowID=mysqli_insert_id($connect); 
				echo "<h3>Record Added:" . $NewRowID . "</h3>";
				header("Location: Admin.Manage.php");
			} else {
				//echo "Error: " . $sql . "<br>" . mysqli_error($connect);
				header("Location: Page.Error.php?Error=". mysqli_error($connect));
			}
			mysqli_close($connect);

	return $NewRowID;
} // end function
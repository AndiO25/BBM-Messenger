<? session_start();
/***************************************************************
	* Purpose: ADD User Email and Password by Admin
	* Created By: Allan Miller
	* Created On: 15-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 15-Dec-2016	
****************************************************************/

								//===== This is how you get data from a HTML form =====
								$tablename="Users";
								$ColumnName1="EmailAddress";
								$ColumnValue1=htmlspecialchars($_POST['EmailAddress']);
								$ColumnName2="Password";
								$ColumnValue2=htmlspecialchars($_POST['Password']);
								$ColumnName3="SaltString";
								$ColumnValue3=htmlspecialchars($_POST['SaltString']);
								$ColumnName4="First_Name";
								$ColumnValue4=htmlspecialchars($_POST['First_Name']);
								$ColumnName5="Middle_Name";
								$ColumnValue5=htmlspecialchars($_POST['Middle_Name']);
								$ColumnName6="Last_Name";
								$ColumnValue6=htmlspecialchars($_POST['Last_Name']);
								$ColumnName7="UserImage";
								$ColumnValue7=htmlspecialchars($_POST['UserImage']);
								$ColumnName8="UserGender";
								$ColumnValue8=htmlspecialchars($_POST['UserGender']);
								$ColumnName9="UserAge";
								$ColumnValue9=htmlspecialchars($_POST['UserAge']);

	
				$NewRowID=AddNewRow($tablename, $ColumnName1, $ColumnValue1,$ColumnName2, $ColumnValue2,$ColumnName3, $ColumnValue3,$ColumnName4, $ColumnValue4,$ColumnName5, $ColumnValue5,$ColumnName6, $ColumnValue6,$ColumnName7,$ColumnValue7, $ColumnName8,$ColumnValue8, $ColumnName9,$ColumnValue9);
			?>
	</center>
</body>
</html>

<?
/////////////////////////////////////////////////////////////////////////////////////////////////////////
function AddNewRow($tablename, $ColumnName1, $ColumnValue1,$ColumnName2, $ColumnValue2, $ColumnName3, $ColumnValue3,$ColumnName4, $ColumnValue4, $ColumnName5, $ColumnValue5 , $ColumnName6, $ColumnValue6,$ColumnName7, $ColumnValue7, $ColumnName8, $ColumnValue8,$ColumnName9, $ColumnValue9)
{
	/***************************************************************
	* Prupose: Adds a new row to an existing table
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 13-Dec-2016	
****************************************************************/
		
		$sql="INSERT INTO $tablename ($ColumnName1, $ColumnName2, $ColumnName3, $ColumnName4, $ColumnName5, $ColumnName6,$ColumnName7,$ColumnName8, $ColumnName9) 
		VALUES('$ColumnValue1', '$ColumnValue2','$ColumnValue3', '$ColumnValue4', '$ColumnValue5', '$ColumnValue6', '$ColumnValue7','$ColumnValue8', '$ColumnValue9')";
		
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
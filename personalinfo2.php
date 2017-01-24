<? session_start();

	
	
								$tablename="Users";
								$ColumnName1="EmailAddress";
								$ColumnValue1=htmlspecialchars($_POST['EmailAddress']);
							    $ColumnName2="UsersPhone";
								$ColumnValue2=htmlspecialchars($_POST['UsersPhone']);
								$ColumnName4="First_Name";
								$ColumnValue4=htmlspecialchars($_POST['First_Name']);
								$ColumnName5="Middle_Name";
								$ColumnValue5=htmlspecialchars($_POST['Middle_Name']);
								$ColumnName6="Last_Name";
								$ColumnValue6=htmlspecialchars($_POST['Last_Name']);
								$ColumnName8="UserGender";
								$ColumnValue8=htmlspecialchars($_POST['UserGender']);
								$ColumnName9="UserAge";
								$ColumnValue9=htmlspecialchars($_POST['UserAge']);


	
				$NewRowID=AddNewRow($tablename, $ColumnName1, $ColumnValue1,$ColumnName2,$ColumnValue2, $ColumnName4, $ColumnValue4,$ColumnName5, $ColumnValue5,$ColumnName6, $ColumnValue6,$ColumnName8,$ColumnValue8, $ColumnName9,$ColumnValue9);
			?>
	</center>
</body>
</html>

<?
/////////////////////////////////////////////////////////////////////////////////////////////////////////
function AddNewRow($tablename, $ColumnName1, $ColumnValue1,$ColumnName2,$ColumnValue2,$ColumnName4, $ColumnValue4,$ColumnName5, $ColumnValue5,$ColumnName6, $ColumnValue6,$ColumnName8,$ColumnValue8, $ColumnName9,$ColumnValue9)
{
	/***************************************************************
	* Prupose: Adds a new row to an existing table
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 13-Dec-2016	
****************************************************************/
		
		$sql="INSERT INTO $tablename ($ColumnName1, $ColumnName2, $ColumnName4, $ColumnName5, $ColumnName6,$ColumnName8, $ColumnName9) 
		VALUES('$ColumnValue1','$ColumnValue2','$ColumnValue4', '$ColumnValue5', '$ColumnValue6','$ColumnValue8', '$ColumnValue9')";
		
		//echo $sql;		

		include "Student6.ConnectString.php";
		if (mysqli_query($connect, $sql)) 
			{
				$NewRowID=mysqli_insert_id($connect); 
				echo "<h3>Record Added:" . $NewRowID . "</h3>";
				header("Location: BBM-Modal.php");
			} else {
				//echo "Error: " . $sql . "<br>" . mysqli_error($connect);
				header("Location: Page.Error.php?Error=". mysqli_error($connect));
			}
			mysqli_close($connect);

	//return $NewRowID;
} // end function
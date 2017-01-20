<? session_start();
/***************************************************************
	* Purpose: ADD User Email and Password by Admin
	* Created By: Allan Miller
	* Created On: 15-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 15-Dec-2016	
****************************************************************/

								//===== This is how you get data from a HTML form =====
								$tablename="Courses";
								$ColumnName1="Username";
								$ColumnValue1=htmlspecialchars($_SESSION["username"]);
								$ColumnName2="Course_Name";
								$ColumnValue2=htmlspecialchars($_POST['CourseName']);
								$ColumnName3="Lesson_Name";
								$ColumnValue3=htmlspecialchars($_POST['Lesson']);
								$ColumnName4="Lesson_Description";
								$ColumnValue4=htmlspecialchars($_POST['LessonDescription']);
								$ColumnName5="Public";
								$ColumnValue5=htmlspecialchars($_POST['Public']);
								$ColumnName6="Lesson_Date";
								$ColumnValue6=htmlspecialchars($_POST['LessonDate']);
								$ColumnName7="Date_Added";
								$ColumnValue7=htmlspecialchars($_POST['Timestamp']);

	
				$NewRowID=AddNewRow($tablename, $ColumnName1, $ColumnValue1,$ColumnName2, $ColumnValue2,$ColumnName3, $ColumnValue3,$ColumnName4, $ColumnValue4,$ColumnName5, $ColumnValue5,$ColumnName6, $ColumnValue6,$ColumnName7, $ColumnValue7);
			?>
	</center>
</body>
</html>

<?
/////////////////////////////////////////////////////////////////////////////////////////////////////////
function AddNewRow($tablename, $ColumnName1, $ColumnValue1,$ColumnName2, $ColumnValue2, $ColumnName3, $ColumnValue3,$ColumnName4, $ColumnValue4, $ColumnName5, $ColumnValue5,$ColumnName6, $ColumnValue6,$ColumnName7, $ColumnValue7)
{
	/***************************************************************
	* Prupose: Adds a new row to an existing table
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 13-Dec-2016	
****************************************************************/
		
		$sql="INSERT INTO $tablename ($ColumnName1, $ColumnName2, $ColumnName3, $ColumnName4, $ColumnName5, $ColumnName6,$ColumnName7) 
		VALUES('$ColumnValue1', '$ColumnValue2','$ColumnValue3', '$ColumnValue4', '$ColumnValue5', '$ColumnValue6', '$ColumnValue7')";
		
		//echo $sql;		

		include "Student1.ConnectString.php";
		if (mysqli_query($connect, $sql)) 
			{
				$NewRowID=mysqli_insert_id($connect); 
				//echo "<h3>Record Added:" . $NewRowID . "</h3>";
				header("Location: Teachers.Upload1.php?CourseID=$NewRowID");
			} else {
				//echo "Error: " . $sql . "<br>" . mysqli_error($connect);
				header("Location: Page.Error.php?Error=". mysqli_error($connect));
			}
			mysqli_close($connect);

	return $NewRowID;
} // end function
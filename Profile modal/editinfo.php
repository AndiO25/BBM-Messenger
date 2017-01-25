<? session_start();

	
								$tablename="Users";
								$ColumnName1="EmailAddress";
								$ColumnValue1=htmlspecialchars($_POST['EmailAddress']);
							
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

	
				UpdateRow($tablename, $ColumnName1, $ColumnValue1,$ColumnName4, $ColumnValue4,$ColumnName5, $ColumnValue5,$ColumnName6, $ColumnValue6,$ColumnName8,$ColumnValue8, $ColumnName9,$ColumnValue9);
			?>
	</center>
</body>
</html>

<?
/////////////////////////////////////////////////////////////////////////////////////////////////////////
function UpdateRow($tablename, $ColumnName1, $ColumnValue1,$ColumnName4, $ColumnValue4,$ColumnName5, $ColumnValue5,$ColumnName6,$ColumnValue6,$ColumnName8,$ColumnValue8, $ColumnName9,$ColumnValue9)
{

		
		$sql="UPDATE $tablename SET $ColumnName1='$ColumnValue1', $ColumnName4='$ColumnValue4', $ColumnName5='$ColumnValue5', $ColumnName6='$ColumnValue6', $ColumnName8='$ColumnValue8', $ColumnName9='$ColumnValue9' WHERE $ColumnName1='$ColumnValue1'";
						
		
		echo "$sql; <br>";	

			include "Student6.ConnectString.php";
			if (mysqli_query($connect, $sql)) 
			{
				echo "<h3>Record Updated: </h3>";
				//header("Location: BBM-Modal.php");
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($connect);
				header("Location: Page.Error.php?Error=". mysqli_error($connect));
			}
			mysqli_close($connect);
			return;
			} //end function
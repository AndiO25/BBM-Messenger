<? session_start();

	
								$tablename="Users";

								$ColumnName1="Status";
								$ColumnValue1=htmlspecialchars($_POST['Online']);
								$ColumnName2="Status";
								$ColumnValue2=htmlspecialchars($_POST['Offline']);
								$ColumnName3="Status";
								$ColumnValue3=htmlspecialchars($_POST['Hidden']);
								$ColumnName4="Status";
								$ColumnValue4=htmlspecialchars($_POST['Status']);
								
	
				UpdateRow($tablename, $ColumnName1, $ColumnValue1,$ColumnName2, $ColumnValue2,$ColumnName3, $ColumnValue3, $ColumnName4,$ColumnValue4);
			?>
	</center>
</body>
</html>

<?
/////////////////////////////////////////////////////////////////////////////////////////////////////////
function UpdateRow($tablename, $ColumnName1, $ColumnValue1,$ColumnName2, $ColumnValue2,$ColumnName3, $ColumnValue3, $ColumnName4,$ColumnValue4)
{

		
		$sql="UPDATE $tablename SET $ColumnName1='$ColumnValue1', $ColumnName2='$ColumnValue2', $ColumnName3='$ColumnValue3' WHERE $ColumnName4='$ColumnValue4'";
						
		
		echo "$sql; <br>";	

			include "Student6.ConnectString.php";
			if (mysqli_query($connect, $sql)) 
			{
				echo "<h3>Status changed</h3>";
				//header("Location: BBM-Modal.php");
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($connect);
				header("Location: Page.Error.php?Error=". mysqli_error($connect));
			}
			mysqli_close($connect);
			return;
			} //end function
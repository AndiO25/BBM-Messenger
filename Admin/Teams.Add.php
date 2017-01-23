<? session_start();
/***************************************************************
	* Purpose: Add some users to your database
	* Created By: Allan Miller
	* Created On: 15-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 15-Dec-2016	
****************************************************************/
?>
<!DOCTYPE html>
<html lang="en">
<body>
  <center>
	  <h1>Add Team:LooneyTunes</h1>
	  
	  
			<!-- *************************************************************************************-->
			<?
					$TeamCaptainUserID="1";
					$TeamName="Blackbelt Students";
					$TeamImage="BBC.PNG";
					
				    $NewRowID=AddNewRow("Teams","$TeamCaptainUserID","$TeamName","$TeamImage");
					
					$TeamCaptainUserID="30";
					$TeamName="Looney Tunes";
					$TeamImage="Bugs_Bunny.jpg";
					
				    $NewRowID=AddNewRow("Teams","$TeamCaptainUserID","$TeamName","$TeamImage");
				

				
			?>
	</center>
</body>
</html>

<?
/////////////////////////////////////////////////////////////////////////////////////////////////////////
function AddNewRow($tablename,$TeamCaptainUserID, $TeamName,$TeamImage)
{
	/***************************************************************
	* Prupose: Adds a new row to an existing table
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 13-Dec-2016	
****************************************************************/
		
		$sql="INSERT INTO $tablename (TeamCaptainUserID, TeamName,TeamImage) 
		VALUES('$TeamCaptainUserID', '$TeamName','$TeamImage')";
									
		include "Student6.ConnectString.php";
		if (mysqli_query($connect, $sql)) 
			{
				$NewRowID=mysqli_insert_id($connect); 
				echo "<h3>Record Added:" . $NewRowID . "</h3>";
				//header("Location: ../UserHomePage.php");
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($connect);
				//header("Location: Page.Error.php?Error=". mysqli_error($connect));
			}
			mysqli_close($connect);

	return $NewRowID;
} // end function
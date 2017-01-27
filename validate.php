<? session_start();
/***************************************************************
	* Name: Simple Login Validation Routine
	* Created By: Allan Miller
	* Created On: 7-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 7-Dec-2016
	
****************************************************************/
		$frmUserName=$_POST['emailAddress'];
///////////////////////////////////////////////////////////////		
		  $userID=checkEmailPassword($frmUserName); 
          //echo $rowCount;
          //echo $resultAccessLevel;

			if ($userID > 0)
				{  //echo "hi";
					$_SESSION['user'] = $userID;
					$_SESSION['emailAddress'] = $frmUserName;
                    //header('Location: http://student-projects.miami/BBM/Message.MainWindow.php'); 
					echo "true";
				}
			else  
				{
					echo "false";
				}
/////////////////////////////////////////////////////////////////////////////////
function checkEmailPassword($frmUserName)
{
		$query="SELECT UserID FROM Users WHERE EmailAddress='$frmUserName'";
		//echo $query;
		include ("Student6.ConnectString.php");
		
		$result=mysqli_query($connect,$query) or die(mysqli_error());
			while($row = mysqli_fetch_assoc($result)) {
				return empty($row["UserID"])? 0: $row["UserID"];
			}
} // end function
mysqli_close($connect);
?>
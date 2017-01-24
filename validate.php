<? session_start();
/***************************************************************
	* Name: Simple Login Validation Routine
	* Created By: Allan Miller
	* Created On: 7-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 7-Dec-2016
	
****************************************************************/
		$frmUserName=$_POST['user'];
///////////////////////////////////////////////////////////////		
		  $rowCount=checkEmailPassword($frmUserName); 
          //echo $rowCount;
          //echo $resultAccessLevel;

			if ($rowCount > 0)
				{  //echo "hi";
					$_SESSION['user'] = $_POST['user'];
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
		$query="SELECT * FROM Users WHERE EmailAddress='$frmUserName'";
		//echo $query;
		include ("Student6.ConnectString.php");
		$result=mysqli_query($connect,$query) or die(mysqli_error()); ;
		$row_cnt = mysqli_num_rows($result);
		return $row_cnt;
} // end function
?>
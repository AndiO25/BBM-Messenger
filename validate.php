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
		  checkEmailPassword($frmUserName); 
          //echo $rowCount;
          //echo $resultAccessLevel;

/////////////////////////////////////////////////////////////////////////////////
function checkEmailPassword($frmUserName)
{
		$query="SELECT UserID, UserImage FROM Users WHERE EmailAddress='$frmUserName'";
		//echo $query;
		include ("Student6.ConnectString.php");
		
		$result=mysqli_query($connect,$query) or die(mysqli_error());
			while($row = mysqli_fetch_assoc($result)) {
				if(empty($row["UserID"])){
					return "false";
				}else{
					$_SESSION["UserImage"] = $row["UserImage"];
					$_SESSION['user'] = $row["UserID"];
					$_SESSION['firstName'] = $row["First_Name"];
					$_SESSION['middleName'] = $row["Middle_Name"];
					$_SESSION['lastName'] = $row["Last_Name"];
					$_SESSION['phoneNumber'] = $row["UserPhone"];
					$_SESSION['age'] = $row["UserAge"];
					$_SESSION['emailAddress'] = $frmUserName;
					return "true";
				}
					 
				//return empty($row["UserID"])? 0: $row["UserID"];
			}
} // end function
mysqli_close($connect); 
?>
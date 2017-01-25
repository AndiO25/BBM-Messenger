<?php session_start();
			$frmFirstName=$_POST['firstName'];
			$frmMiddleName=$_POST['middleName'];
			$frmLastName=$_POST['lastName'];
			$frmEmailAddress=$_POST['emailAddress'];
			$frmPassword=$_POST['password'];
			$frmPhoneNumber=$_POST['phoneNumber'];
			$frmAge=$_POST['age'];
			$frmGender=$_POST['gender'];
/////////////////////////////////////////////////////////////////////////////////
		 	$rowcount=CheckEmail($frmEmailAddress); 
          //echo "ROW ".$rowcount;
			if ($rowcount == 0)
				{  //echo "hi";
					InsertIntoUsers($frmFirstName,$frmMiddletName,$frmLastName,$frmEmailAddress,$frmPassword,$frmPhoneNumber,$frmAge,$frmGender);
				}
			else 
				{
					//echo "hi new user";
					echo "false";
				}
?>
<?php
/////////////////////////////////////////////////////////////////////////////////
function CheckEmail($emailAddress)
{
		//echo "Before Query";
		$query="SELECT * FROM Users WHERE EmailAddress='$emailAddress'";
		include "Student6.ConnectString.php";
		//echo $connect;	
		$result = mysqli_query($connect, $query);
		$row_cnt = mysqli_num_rows($result);
			//$connect = mysqli_connect($host_name, $user_name, $password, $database);
		//$result=mysqli_query($connect,$query) or die(mysqli_error()); ;
		
		//printf("Result set has %d rows.\n", $row_cnt);
		return $row_cnt;	
		
} // end function

////////////////////////////////////////////////////////////////////////////
function InsertIntoUsers($firstName,$middletName,$lastName,$emailAddress,$password,$phoneNumber,$age,$gender)
{
		//$Username='me@me.com';
		$query="INSERT INTO Users (First_Name, Middle_Name, Last_Name, EmailAddress, Password, UserPhone, UserAge, UserGender) VALUES('$firstName', '$middletName', '$lastName', '$emailAddress', $password, $phoneNumber, $age, $gender)";
		include "Student6.ConnectString.php";
		//$result = mysqli_query($connect, $query);
		//$UserID = mysqli_insert_id($connect);
		//echo $connect; 
		if (mysqli_query($connect, $query)) 
		{
			$UserID=mysqli_insert_id($connect); 
		// 		//echo "<h3>Record Added:" . $UserID . "</h3>";
		// 		header('Location: courses.php');
			return $UserID;
		} else {
		echo "Error: " . $query . "<br>" . mysqli_error($connect);
		// 		//header("Location: Page.Error.php?Error=". mysqli_error($connect));
		
		}
			
} // end function
?>
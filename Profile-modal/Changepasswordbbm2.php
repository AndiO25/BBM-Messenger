<? session_start();


							
								$tablename="Users";
								
								$ColumnName2="Password";
								$frmOldPassword=htmlspecialchars($_POST['Password']);
								$ColumnName3="SaltString";
								$ColumnValue3=htmlspecialchars($_POST['SaltString']);
								$ColumnName4="NewPassword";
								$ColumnValue4=htmlspecialchars($_POST['NewPassword']);
								$ColumnName5="ConfirmPassword";
								$ColumnValue5=htmlspecialchars($_POST['ConfirmPassword']);
							
								$EmailAddress=($_POST['EmailAddress']);
								$UserID=$_SESSION['UserID'];
								//echo "$UserID";


	   /////////////////////////////Check old password match//////////////////////////////////////
   //echo "checking old password";
   $OldPassword=checkPassword($UserID);
    if($OldPassword != $frmOldPassword) {
    	echo "<p style='vertical-align: middle; width: 800px; text-align: center; font-size: 44pt; font-family: Arial; color:black; background-color: red;'>";
		echo "Your old password does not match what we have stored. Go back and try again </p>"; 
		
    }

          

			
				
			
//echo "checking if passwords match";
      

	if (isset($ColumnValue4)&& isset($ColumnValue5)){
		

	if (trim($ColumnValue4) != trim($ColumnValue5))
	{
		echo "<p style='vertical-align: middle; width: 800px; text-align: center; font-size: 44pt; font-family: Arial; color:black; background-color: red;'>";
		echo "Your new passwords do not match.  Press the back button and try again </p>"; 
		exit;
	}else{
		changeThePassword($ColumnValue4,$UserID);
	}
}else{
	echo "NewPassword IS BLANK or ConfirmPassword";
	echo $ColumnValue4;
	echo $ColumnValue5; 
}
//echo "OK...I am done";
////////////////////////////////////////////////
function checkPassword($UserID){


	    $query="SELECT Password FROM Users WHERE UserID='$UserID'";
	    //echo $query;
		include ("Student6.ConnectString.php");
		//echo $query;
		$connect = mysqli_connect($host_name, $user_name, $password, $database);
		$result=mysqli_query($connect,$query) or die(mysqli_error()); ;
		$row_cnt = mysqli_num_rows($result);
		mysqli_close($connect);
		$OldPassword=$ResultArray['Password'];
		//printf("Result set has %d rows.\n", $row_cnt);
		//echo "num=$row_cnt<br>";
		return $OldPassword;
} // end function


///////////////////////////////////////////////////////////////
function changeThePassword($ColumnValue4,$user_id_number){
	
	
	$EmailAddress=$_POST['EmailAddress'];
	$SaltString="123ABC";
	$ColumnValue4=hash(sha256,$ColumnValue4+$SaltString);
		//$sql="UPDATE Users SET 	WHERE Password='$Password'";



		$sql="UPDATE Users SET Password='$ColumnValue4' , SaltString='$SaltString' WHERE UserID=$user_id_number";
	
		
	//echo "$sql<br><br>";
	
	/////////////////////// Update Database ///////////////////////////////////////////////////////
		include "Student6.ConnectString.php";
			if (mysqli_query($connect, $sql)) 
			{
				//echo "<h3>Your new password is:" .$ColumnValue4. "</h3>";
				header("Location:Message.MainWindow.php");
			} else 
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}



}

?>
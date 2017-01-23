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
	  <h1><img src='http://static.thetoptens.com/img/lists/1689.jpg'>Add Looney Tunes Users to your database<img src='http://static.thetoptens.com/img/lists/1945.jpg'></h1>
	  
	  
			<!-- *************************************************************************************-->
			<?
				$EmailAddress = array("Bugs_Bunny@looneytunes.tv",
				"Daffy_Duck@looneytunes.tv",
				"Yosemite_Sam@looneytunes.tv",
				"Elmer_Fudd@looneytunes.tv",
				"Wile_E._Coyote@looneytunes.tv",
				"Taz_the_Tasmanian_Devil@looneytunes.tv",
				"Marvin_the_Martian@looneytunes.tv",
				"Sylvester_the_Cat@looneytunes.tv",
				"Tweety@looneytunes.tv",
				"Roadrunner@looneytunes.tv",
				"Porky_Pig@looneytunes.tv",
				"Fog_Horn_Leg_Horn@looneytunes.tv",
				"Pepé_Le_Pew@looneytunes.tv",
				"Speedy_Gonzales@looneytunes.tv");

				$UserImage = array("Bugs_Bunny.jpg",
				"Daffy_Duck.jpg",
				"Yosemite_Sam.jpg",
				"Elmer_Fudd.jpg",
				"Wile_E._Coyote.jpg",
				"Taz_the_Tasmanian_Devil.jpg",
				"Marvin_the_Martian.jpg",
				"Sylvester_the_Cat.jpg",
				"Tweety.jpg",
				"Roadrunner.jpg",
				"Porky_Pig.jpg",
				"Fog_Horn_Leg_Horn.jpg",
				"Pepé_Le_Pew.jpg",
				"Speedy_Gonzales.jpg");
				
				$arrlength = count($EmailAddress);

				for($x = 0; $x < $arrlength; $x++) 
				{
				    echo "Adding User...".$EmailAddress[$x];
				    echo "<br>";
				    $UserPhone="1235555555";
				    $UserGateway="@tmomail.net";
				    $SaltString="looneytunes";
				    $SaltHashPassword=hash(sha256,$EmailAddress[$x]+$SaltSting);
				    $NewRowID=AddNewRow("Users", $EmailAddress[$x],$SaltHashPassword,$SaltString,$UserPhone,$UserGateway,$UserImage[$x]);
				} // end for($x = 0; $x < $arrlength; $x++)


				
			?>
	</center>
</body>
</html>

<?
/////////////////////////////////////////////////////////////////////////////////////////////////////////
function AddNewRow($tablename,$EmailAddress, $Password,$SaltString,$UserPhone,$UserGateway,$UserImage)
{
	/***************************************************************
	* Prupose: Adds a new row to an existing table
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 13-Dec-2016	
****************************************************************/
		
		$sql="INSERT INTO $tablename (EmailAddress, Password,SaltString,UsersPhone,UsersGateway,UserImage) 
		VALUES('$EmailAddress', '$Password','$SaltString','$UserPhone','$UserGateway','$UserImage')";
									
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
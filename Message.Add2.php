<? session_start();
/***************************************************************
	* Purpose: CRUD Code Snippets
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 13-Dec-2016	
****************************************************************/

				//===== This is how you get data from a HTML form =====
								$Message=htmlspecialchars($_POST['Message']);
								$TeamID="1";
								$AddedByUserID=$_SESSION['UserID'];

								$sql="INSERT INTO Messages (Message,TeamID, AddedByUserID) 
								VALUES('$Message','$TeamID','$AddedByUserID')";

								//echo "$sql";					

						include "Student6.ConnectString.php";
						if (mysqli_query($connect, $sql)) 
							{
								//$NewRowID=mysqli_insert_id($connect); 
								//echo "<h3>Record Added:" . $NewRowID . "</h3>";
								header("Location: Message.MainWindow.php");
							} else {
								//echo "Error: " . $sql . "<br>" . mysqli_error($connect);
								header("Location: Page.Error.php?Error=". mysqli_error($connect));
							}
							mysqli_close($connect);
							
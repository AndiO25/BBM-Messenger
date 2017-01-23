<? session_start();
/***************************************************************
	* Purpose: CRUD Code Snippets
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 13-Dec-2016	
****************************************************************/


		if (empty($_POST['CourseID'])) {header("Location: Page.Error.php?Error=Missing CourseID");}

 
		$CourseID=htmlspecialchars($_POST['CourseID']);
		$SQLDelete="DELETE FROM Courses WHERE CourseID=$CourseID";						
													
		include "Student6.ConnectString.php";
						if (mysqli_query($connect, $SQLDelete)) 
							{
								//echo "<h3>Record Added:" . $NewRowID . "</h3>";
								header("Location: Courses.Delete3.php");
							} else {
								//echo "Error: " . $sql . "<br>" . mysqli_error($connect);
								header("Location: Page.Error.php?Error=". mysqli_error($connect));
							}
							mysqli_close($connect);
							
?>
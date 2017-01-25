<? session_start();
/***************************************************************
	* Purpose: CRUD Code Snippets
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 13-Dec-2016	
****************************************************************/

				//===== This is how you get data from a HTML form =====
								$CourseName=htmlspecialchars($_POST['CourseName']);
								$TeacherID=htmlspecialchars($_POST['TeacherID']);
								$CourseDescription=htmlspecialchars($_POST['CourseDescription']);
								$CourseImageName=htmlspecialchars($_POST['CourseImageName']);
								$CourseCatelogueNumber=htmlspecialchars($_POST['CourseCatelogueNumber']);
								

								$sql="INSERT INTO Courses (CourseName,TeacherID,CourseDescription,CourseImageName,CourseCatelogueNumber) 
								VALUES('$CourseName','$TeacherID','$CourseDescription','$CourseImageName','$CourseCatelogueNumber')";

								//echo "$sql";					

						include "Student6.ConnectString.php";
						if (mysqli_query($connect, $sql)) 
							{
								//$NewRowID=mysqli_insert_id($connect); 
								//echo "<h3>Record Added:" . $NewRowID . "</h3>";
								header("Location: Courses.Add3.php");
							} else {
								//echo "Error: " . $sql . "<br>" . mysqli_error($connect);
								header("Location: Page.Error.php?Error=". mysqli_error($connect));
							}
							mysqli_close($connect);
							
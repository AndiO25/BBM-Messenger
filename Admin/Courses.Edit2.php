<? session_start();
/***************************************************************
	* Purpose: CRUD Code Snippets
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 13-Dec-2016	
****************************************************************/
if (empty($_POST['CourseID'])) {header("Location: Page.Error.php?Error=Missing CourseID");}

				//===== This is how you get data from a HTML form =====
								$CourseID=htmlspecialchars($_POST['CourseID']);
								$CourseName=htmlspecialchars($_POST['CourseName']);
								$TeacherID=htmlspecialchars($_POST['TeacherID']);
								$CourseDescription=htmlspecialchars($_POST['CourseDescription']);
								$CourseImage=htmlspecialchars($_POST['CourseImage']);
								$CourseImageName=htmlspecialchars($_POST['CourseImageName']);
								$CourseCatelogueNumber=htmlspecialchars($_POST['CourseCatelogueNumber']);
								
								$sql="UPDATE Courses SET 
									CourseName='$CourseName',
									TeacherID='$TeacherID',
									CourseDescription='$CourseDescription',
									CourseImageName='$CourseImageName',
									CourseCatelogueNumber='$CourseCatelogueNumber'
									Where CourseID=$CourseID";

								//echo "sql:".$sql;

								
													
						include "Student6.ConnectString.php";
						if (mysqli_query($connect, $sql)) 
							{
								$NewRowID=mysqli_insert_id($connect); 
								//echo "<h3>Record Added:" . $NewRowID . "</h3>";
								header("Location: Courses.Edit3.php");
							} else {
								//echo "Error: " . $sql . "<br>" . mysqli_error($connect);
								header("Location: Page.Error.php?Error=". mysqli_error($connect));
							}
							mysqli_close($connect);
							
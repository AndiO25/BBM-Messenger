<? session_start();
/***************************************************************
	* Purpose: CRUD Code Snippets
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 13-Dec-2016	
****************************************************************/
 if (empty($_GET['CourseID'])) {header("Location: Page.Error.php?Error=Missing CourseID");} 
//////////////////////////////////////////////////////////////////
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Courses Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Course Management</h2>
  <p>Removing a course from the database</p>  
  <?
         $query="SELECT * FROM Courses WHERE CourseID=".$_GET['CourseID'];
        //echo $query;
        include "Student6.ConnectString.php";
        $connect = mysqli_connect($host_name, $user_name, $password, $database);
        $result=mysqli_query($connect,$query) or die(mysqli_error()); ;
        $row_count = mysqli_num_rows($result);
        mysqli_close($connect);
        //printf("Result set has %d rows.\n", $row_cnt);
        //echo "num=$row_cnt<br>";
        while($ResultsArray = mysqli_fetch_array($result)) 
        {
           
           $CourseID=$ResultsArray[0];
           $CourseName=$ResultsArray[1];
           $TeacherID=$ResultsArray[2];
           $CourseDescription=$ResultsArray[3];
           $CourseImage=$ResultsArray[4];
           $CourseCatelogueNumber=$ResultsArray[5];

           echo "<h3>Course to be removed: $CourseName</h3>";
 
        } // while($ResultsArray = mysqli_fetch_array($result)) 
     ?>
	<form action="Courses.Delete2.php" method="post">
	<input type="hidden" name="CourseID" value="<? echo $_GET['CourseID']; ?>">
		  <div style="width: 600px; height:200px; text-align: center;margin:10px;">
			  
				<h2> Please confirm that you want to delete this course from the database </h2>
				<input type=button name="no" value="No, I want to keep this course !" onClick="history.go(-1);return true;" >&nbsp;&nbsp;&nbsp;
				<input type=submit name="yes" value="Yes, delete this course !">

			  
		  </div>
	</form>
	</div>
</center>	
</body>
</html>
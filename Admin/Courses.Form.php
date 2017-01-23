<? session_start();
/***************************************************************
  * Purpose: CRUD Code Snippets
  * Created By: Allan Miller
  * Created On: 13-Dec-2016
  * Revised By: Allan Miller
  * Revised On: 13-Dec-2016 
****************************************************************/

echo "<table class='table table-bordered table-hover'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th colspan='2'>Add/Edit Courses</th>";
      echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
       if ($IsNewRecord=="no")
      {
        echo "<tr>";
        echo "<td>Course ID:</td>";
        echo "<td>$CourseID</td>";
      echo "</tr>";
      }
      echo "<tr>";
         echo "<td>Course Name:</td>";
        echo "<td><input type='text' name='CourseName' value='$CourseName'></td>";
      echo "</tr>";
      echo "<tr>";
        echo "<td>Teachers Name:</td>";
        echo "<td><select name='TeacherID'>";
              include "Student6.ConnectString.php";
              $connect2 = mysqli_connect($host_name, $user_name, $password, $database);
              $query2="SELECT * FROM Teachers ORDER By TeacherLastName, TeacherFirstName"; 
              $result2=mysqli_query($connect2,$query2) or die(mysqli_error()); ;
              $row_cnt2 = mysqli_num_rows($result2);
              mysqli_close($connect2);
                while($ResultsArray2 = mysqli_fetch_array($result2)) 
                {
                  $xTeacherID=$ResultsArray2['TeacherID'];
                  $xTeacherFirstName=$ResultsArray2['TeacherFirstName'];
                  $xTeacherLastName=$ResultsArray2['TeacherLastName'];
                  $xTeacherSubject=$ResultsArray2['TeacherSubject'];
                  if ($xTeacherID == $TeacherID) { echo "<option value='$xTeacherID' selected>$xTeacherLastName,$xTeacherFirstName</option>"; } 
                  else {echo "<option value='$xTeacherID'>$xTeacherLastName,$xTeacherFirstName</option>"; }
                } // end while
        echo "</select></td>";
      echo "</tr>";
      echo "<tr>";
         echo "<td>Course Description:</td>";
        echo "<td><textarea name='CourseDescription'>$CourseDescription</textarea></td>";
      echo "</tr>";
      echo "<tr>";
         echo "<td>Course Image:</td>";
        echo "<td><textarea name='CourseImageName'>$CourseImageName</textarea></td>";
      echo "</tr>";
      echo "<tr>";
         echo "<td>Course Catelogue Number:</td>";
        echo "<td><input type='text' name='CourseCatelogueNumber' value='$CourseCatelogueNumber'></td>";
      echo "</tr>";
      echo "<tr>";
         echo "<td colspan='2'><input type='submit' value='Add this Course'></td>";
      echo "</tr>";
    echo "</tbody>";
  echo "</table>";
  ?>
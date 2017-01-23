<!DOCTYPE html>
<html lang="en">
<body>
    <center>
    <h1>Course Management</h1>
    <p>Select your course to edit or delete</p>
      <!-- ***************************** HTML Table ********************************************************-->
      <div class="container">
  <p></p>            
  <?
    echo "<table class='table table-bordered table-hover'>";
    echo "<thead style='color: white; background:black; font-weight: bold;'>";
    echo "<tr>";
     /*************************************************************************
    *             This is your first query for the column names              *
    **************************************************************************/
      $query = "SHOW COLUMNS FROM Courses";
      include "Student6.ConnectString.php";
      $connect = mysqli_connect($host_name, $user_name, $password, $database);
      $result = mysqli_query($connect,$query);
      $col_count = mysqli_num_rows($result);

      if ($result) 
      { 
        while($row = mysqli_fetch_array($result))
        echo "<th>".$row['Field']."</th>";
      } else {
          echo "Error showing table columns for: $tablename" . mysqli_error($connect);
      }
      mysqli_close($connect);
    
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>"; 
    /*************************************************************************
    *  This is your second query for the actual rows of the database         *
    **************************************************************************/
    echo $query="SELECT * FROM Courses";
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
      
          echo '<tr>';
           $CourseID=$ResultsArray[0];
           $CourseName=$ResultsArray[1];
           $TeacherID=$ResultsArray[2];
           $CourseDescription=$ResultsArray[3];
           $CourseImage=$ResultsArray[4];
           $CourseCatelogueNumber=$ResultsArray[5];
                  echo "<tr>";
                  echo "<td>$CourseCatelogueNumber</td>";
                  echo "<td>$CourseName</td>";
                  echo "<td><a href='Courses.Edit1.php?CourseID=$CourseID'>EDIT</a></td>";
                  echo "<td><a href='Courses.Delete1.php?CourseID=$CourseID'>DETELE</a></td>";
                  echo "</tr>";
          echo '</tr>';
    } // while($ResultsArray = mysqli_fetch_array($result)) 
    echo "</tbody>";    
    echo "</table>";

           
        
        ?>
    
</div>
</center>
</body>
</html>




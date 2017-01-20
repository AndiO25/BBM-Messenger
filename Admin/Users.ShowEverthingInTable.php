<? session_start();
/***************************************************************
  * Purpose: CRUD Code Snippets
  * Created By: Allan Miller
  * Created On: 13-Dec-2016
  * Revised By: Allan Miller
  * Revised On: 13-Dec-2016 
****************************************************************/
?>
<!DOCTYPE html>
<html lang="en">
<body>
  <center>
      <h1>Show Everything</h1>
      <p>Shows everything in the users table</p>
        <!-- ***************************** ********************************************************-->
        <?
          ShowEntireTable("Users");
        ?>
        
  </center>
</body>
</html>

<?
/////////////////////////////////////////////////////////////////////////////////////////////////////////
function ShowEntireTable($tablename)
{
  /***************************************************************
  * Prupose: Gets the column names and then the data from the table
  * Created By: Allan Miller
  * Created On: 13-Dec-2016
  * Revised By: Allan Miller
  * Revised On: 13-Dec-2016 
****************************************************************/ 
          
    echo "<table class='table table-bordered table-hover'>";
    echo "<thead style='color: white; background:black; font-weight: bold;'>";
    echo "<tr>";
    /*************************************************************************
    *             This is your first query for the column names              *
    **************************************************************************/
      $query = "SHOW COLUMNS FROM $tablename";
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
    echo $query="SELECT * FROM $tablename";
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
              for ($i = 0; $i <= $col_count; $i++){ //2nd for loop
                  echo '<td>'.$ResultsArray[$i].'</td>';
              }
          echo '</tr>';
    } // while($ResultsArray = mysqli_fetch_array($result)) 
    echo "</tbody>";    
    echo "</table>";
} // end function
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
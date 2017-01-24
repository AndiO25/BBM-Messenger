<?
echo "<table class='table table-bordered table-hover'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th colspan='2'>Add/Edit Team</th>";
      echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
      if ($IsNewRecord=="no")
      {
        echo "<tr>";
        echo "<td>Team ID:</td>";
        echo "<td>$TeamID</td>";
      echo "</tr>";
      }
      
      echo "<tr>";
      echo "<tr>";
         echo "<td>TeamCaptainUserID:</td>";
        echo "<td><select name='TeamCaptainUserID'>";
        GetUsersInfo();
        echo "</select></td>";

      echo "</tr>";
      echo "<tr>";
      echo "<tr>";
         echo "<td>TeamName:</td>";
        echo "<td><input type='text' name='TeamName' value='$TeamName'></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<tr>";
         echo "<td>TeamImage:</td>";
        echo "<td><input type='text' name='TeamImage' value='$TeamImage'></td>";
      echo "</tr>";
      echo "<tr>";
         echo "<td colspan='2'><input type='submit' value='Save'></td>";
      echo "</tr>";
    echo "</tbody>";
  echo "</table>";

function GetUsersInfo($UserID)
{
              include "Student6.ConnectString.php";
              $connect2 = mysqli_connect($host_name, $user_name, $password, $database);
              $query2="SELECT * FROM Users"; 

              $result2=mysqli_query($connect2,$query2) or die(mysqli_error()); ;
              $row_cnt2 = mysqli_num_rows($result2);
              mysqli_close($connect2);
                while($ResultsArray2 = mysqli_fetch_array($result2)) 
                {
                  $First_Name=$ResultsArray2['First_Name'];
                  $Middle_Name=$ResultsArray2['Middle_Name'];
                  $Last_Name=$ResultsArray2['Last_Name'];
                  $UserID=$ResultsArray2['UserID'];

                  $Full_Name= $First_Name." ".$Middle_Name." ".$Last_Name;

                  //echo "<tr>";
                      echo "<option value='$UserID'>$Full_Name</option>";
                  //echo "</tr>";
                } // end while
  return;
} // end function       



?>


<?
echo "<table class='table table-bordered table-hover'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th colspan='2'>Add User to Team</th>";
      echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
      if ($IsNewRecord=="no")
      
      echo "<tr>";
      echo "<tr>";
         echo "<td>User:</td>";
        echo "<td><select name='UserID'>";
        GetUsersInfo();
        echo "</select></td>";

      echo "</tr>";
      echo "<tr>";
      echo "<tr>";
         echo "<td>TeamName:</td>";
        echo "<td><select name='TeamName'>";
        GetTeamName();
        echo"</select></td>";
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
                      echo "<input type='hidden' name='Full_Name' value='$'>";
                  //echo "</tr>";
                } // end while
  return;
} // end function       

function GetTeamName($TeamName)
{
              include "Student6.ConnectString.php";
              $connect2 = mysqli_connect($host_name, $user_name, $password, $database);
              $query2="SELECT * FROM Teams"; 

              $result2=mysqli_query($connect2,$query2) or die(mysqli_error()); ;
              $row_cnt2 = mysqli_num_rows($result2);
              mysqli_close($connect2);
                while($ResultsArray2 = mysqli_fetch_array($result2)) 
                {
                  $TeamName=$ResultsArray2['TeamName'];
                  $TeamID=$ResultsArray2['TeamID'];
                  $TeamCaptainUserID=$ResultsArray2['TeamCaptainUserID'];

                    echo "<option value='$TeamName'>$TeamName</option>";
                    echo "<input type='hidden' name='TeamID' value='$TeamID'>";
                } // end while
  return;
} // end function       






?>


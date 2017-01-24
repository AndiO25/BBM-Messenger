<? session_start();
/***************************************************************
  * Purpose: CRUD Code Snippets
  * Created By: Allan Miller
  * Created On: 13-Dec-2016
  * Revised By: Allan Miller
  * Revised On: 13-Dec-2016 
****************************************************************/

    /*************************************************************************
    *             This is your first query for the column names              *
    **************************************************************************/
      $query = "SELECT * FROM Teams";
      include "Student6.ConnectString.php";
      $connect = mysqli_connect($host_name, $user_name, $password, $database);
      $result = mysqli_query($connect,$query);
      $col_count = mysqli_num_rows($result);
      mysqli_close($connect);
    
          while($ResultsArray = mysqli_fetch_array($result)) 
                {
                  $TeamID=$ResultsArray['TeamID'];
                  $TeamName=$ResultsArray['TeamName'];
                  $TeamCaptainUserID=$ResultsArray['TeamCaptainUserID'];
                  $TeamImage=$ResultsArray['TeamImage'];

                 

                      echo "<h1>$TeamName</h1>"; 
                      if (isset($TeamCaptainUserID)) {
                        $TeamCaptain=GetTeamCaptainName($TeamCaptainUserID);
                      }else{
                        $TeamCaptain="No captain!";
                      }
                      
                      echo "<h3><u>Team Captain:$TeamCaptain</u></h3>";
                      echo "<table class='table table-bordered table-hover'>";
                      echo "<tbody>";
                        GetTeamMembers($TeamID);                     
                      echo "<tbody>";
                      echo "</table>"; 
                }  //while($ResultsArray = mysqli_fetch_array($result)) 
               

function GetTeamCaptainName($TeamCaptainUserID)
{
              include "Student6.ConnectString.php";
              $connect2 = mysqli_connect($host_name, $user_name, $password, $database);
              $query2="SELECT * FROM Users WHERE UsersID=$TeamCaptainUserID"; 

              $result2=mysqli_query($connect2,$query2) or die(mysqli_error()); ;
              $row_cnt2 = mysqli_num_rows($result2);
              mysqli_close($connect2);
                while($ResultsArray2 = mysqli_fetch_array($result2)) 
                {
                  $First_Name=$ResultsArray2['First_Name'];
                  $Middle_Name=$ResultsArray2['Middle_Name'];
                  $Last_Name=$ResultsArray2['Last_Name'];

                  $TeamCaptain=$First_Name." ".$Middle_Name." ".$Last_Name;
                } // end while
  return $TeamCaptain;
} // end function       
  
function GetTeamMembers($TeamID)
{
              include "Student6.ConnectString.php";
              $connect2 = mysqli_connect($host_name, $user_name, $password, $database);
              $query2="SELECT * FROM TeamMembers WHERE TeamID=$TeamID"; 

              $result2=mysqli_query($connect2,$query2) or die(mysqli_error()); ;
              $row_cnt2 = mysqli_num_rows($result2);
              mysqli_close($connect2);
                while($ResultsArray2 = mysqli_fetch_array($result2)) 
                {
                  $UserID=$ResultsArray2['UserID'];
                  GetUsersInfo($UserID);
                } // end while
  return;
} // end function       

function GetUsersInfo($UserID)
{
              include "Student6.ConnectString.php";
              $connect2 = mysqli_connect($host_name, $user_name, $password, $database);
              $query2="SELECT * FROM Users WHERE UsersID=$UserID"; 

              $result2=mysqli_query($connect2,$query2) or die(mysqli_error()); ;
              $row_cnt2 = mysqli_num_rows($result2);
              mysqli_close($connect2);
                while($ResultsArray2 = mysqli_fetch_array($result2)) 
                {
                  $First_Name=$ResultsArray2['First_Name'];
                  $Middle_Name=$ResultsArray2['Middle_Name'];
                  $Last_Name=$ResultsArray2['Last_Name'];

                  $Full_Name=$First_Name." ".$Middle_Name." ".$Last_Name;

                  echo "<tr>";
                      echo "<td>$Full_Name</td>";
                  echo "</tr>";
                } // end while
  return;
} // end function       
?>
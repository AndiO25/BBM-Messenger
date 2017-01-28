<?php            
/*************************************************************************
        *  This is your second query for the actual rows of the database         *
        **************************************************************************/
        $query="SELECT * FROM Teams";
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
           $TeamID=$ResultsArray['TeamID'];
           $TeamName=$ResultsArray['TeamName'];
           $TeamCaptainUserID=$ResultsArray['TeamCaptainUserID'];

           if ($_SESSION['UserID'] == "$TeamCaptainUserID") 
            {
            echo '<li> '.$TeamName.'</li>';
            } 
           else 
                GetTeamMembers($TeamID);
           //and  
            //(isset($UserID) == 'UserID')
            //{
            //echo '<li> '.$TeamName.'</li>';
        } 

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

                  if ($_SESSION['UserID'] == 'UserID'){
                    echo '<li>'.$TeamName.'</li>';}

                  //GetUsersInfo($UserID);
                } // end while
  return;
} // end function       

?>
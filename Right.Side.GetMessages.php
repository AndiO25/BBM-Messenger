<style type="text/css">
#ShowMessages
{ padding-bottom: 0px; }
header{
    position: relative; 
}

.MessagePostDateTime{
    float:right;
    position:relative;
    bottom:0;
    right:0;
    clear:right
    font-size: xx-small;
    color:silver;
    padding:5px
}

</style>
<?
echo "<div id='ShowMessages' style='margin:1px;'>";
echo "<table  class='table table-bordered table-hover' style='margin:1px;'>";
echo " <tbody>";
$query="SELECT * FROM Messages ORDER BY MessageID DESC Limit 5";
$query="SELECT * FROM 
    (SELECT * FROM Messages 
      ORDER BY MessageID DESC
      LIMIT 10
    ) AS `table` ORDER by MessageID ASC";
    //echo $query 
    //WHERE (userID = $session AND toID = $friendID) 
    //    OR (userID = $friendID AND toID = $session)  ;
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
          echo "<td><img src='images/UserIcon.png' width='64px'></td>";
          echo '<td>';
          echo $ResultsArray["Message"];
          echo "<p class='MessagePostDateTime'>Posted On:".$ResultsArray["Added_On"]."</p>";
          echo'</td>';
      echo '</tr>';

    } // while($ResultsArray = mysqli_fetch_array($result)) 
echo " </tbody>";
echo " </table>";
echo "</div>";
//echo '<div id="bottom_of_page">&nbsp;<a name="mylocation"></a></div>';

 include "Message.Add1.php" ;
?>
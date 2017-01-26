<style>
  #MessageBottomRight {
    position: fixed;
    bottom: 0;
    right: 0;
    margin:0;
    border:0px;
  }
  #Transparent
  {
  min-width:300px; 
  max-width:300px;
  width: 300px;
  background: none;
  border: 0px;

  }
</style>

<? session_start();

  echo"<form action='Message.Add2.php' method='post'>";     
  echo "<table id='MessageBottomRight' class='table table-bordered'>";
  echo "<tr>";
  echo "<td id='Transparent'>&nbsp;</td>";
  echo "<td style='background-color: #fed600; '> <textarea class='form-control' style='display:inline; width:90%; max-width:90%; vertical-align:middle;' rows='2' name='Message' value=''></textarea> <input type='submit' value='Send' class='btn btn-default btn-lg'></td>";
  //echo "<td></td>";
  echo "</tr>";
  echo "</tbody>";
  echo "</table>";
  echo "</form>";
?>

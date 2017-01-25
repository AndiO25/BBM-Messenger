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
  echo "<table id='MessageBottomRight' class='table table-bordered table-hover'>";
  echo "<tr>";
  echo "<td id='Transparent'>&nbsp;</td>";
  echo "<td style='background-color: #fed600;'><input type='text' name='Message' value=''><input type='submit' value='Save' ></td>";
  //echo "<td></td>";
  echo "</tr>";
  echo "</tbody>";
  echo "</table>";
  echo "</form>";
?>

<style>
  #MessageBottomRight {
    position: fixed;
    bottom: 0;
    right: 0;
  }
</style>

<? session_start();
  echo"<form action='Message.Add2.php' method='post'>";     
  echo "<table id='MessageBottomRight' class='table table-bordered table-hover'>";
  echo "<tr>";
  //echo "<td></td>";<div class='form-group'></div>
  echo "<td><input type='text' class='form-control' name='Message' value='new message'></td>";
  echo "<td><input type='submit'  class='form-control' value='Save' ></td>";
  echo "</tr>";
  echo "</tbody>";
  echo "</table>";
  echo "</form>";
?>

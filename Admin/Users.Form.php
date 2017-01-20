<?
echo "<table class='table table-bordered table-hover'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th colspan='2'>Add/Edit Users</th>";
      echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
      if ($IsNewRecord=="no")
      {
        echo "<tr>";
        echo "<td>User ID:</td>";
        echo "<td>$UserID</td>";
      echo "</tr>";
      }
      
      echo "<tr>";
         echo "<td>EmailAddress:</td>";
        echo "<td><input type='text' name='EmailAddress' value='$EmailAddress'></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<tr>";
         echo "<td>Password:</td>";
        echo "<td><input type='text' name='Password' value='$Password'></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<tr>";
         echo "<td>SaltString:</td>";
        echo "<td><input type='text' name='SaltString' value='$SaltString'></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<tr>";
         echo "<td>First_Name:</td>";
        echo "<td><input type='text' name='First_Name' value='$First_Name'></td>";
      echo "</tr>";
      echo "<tr>";
         echo "<td>Middle_Name:</td>";
        echo "<td><input type='text' name='Middle_Name' value='$Middle_Name'></td>";
      echo "</tr>";
      echo "<tr>";
         echo "<td>Last_Name:</td>";
         echo "<td><input type='text' name='Last_Name' value='$Last_Name'></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<tr>";
         echo "<td>UserImage:</td>";
         echo "<td><input type='text' name='UserImage' value='$UserImage'></td>";
      echo "</tr>";
      echo "<tr>";
         echo "<td>UserGender:</td>";
         echo "<td><input type='text' name='UserGender' value='$UserGender'></td>";
      echo "</tr>";
      echo "<tr>";
         echo "<td>UserAge:</td>";
         echo "<td><input type='text' name='UserAge' value='$UserAge'></td>";
      echo "</tr>";
      echo "<tr>";
         echo "<td colspan='2'><input type='submit' value='Save'></td>";
      echo "</tr>";
    echo "</tbody>";
  echo "</table>";
?>
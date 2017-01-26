<? session_start();
/***************************************************************
  * Purpose: Main Window for Messages to be displayed
  * Created By: The BBC team
  * Created On: 18-Dec-2017
****************************************************************/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Black Belt Messager App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .span10 {
    padding-left:300px;
    padding-right:20px; 
    padding-top:20px;
    padding-bottom:90px; 
    background-color:white;
  }
  </style>
</head>
<body onload="moveWindow()">
<div class="container-fluid">
  <div class="row-fluid">


  <form  align="center"  name="Personal" onSubmit="" value action="editinfo.php" method="POST">
      <table>
           <br>  E-mail  <br> <input type="Text"  name="EmailAddress">

          <br>  First Name  <br> <input type="Text"  name="First_Name">
        
          <br> Middle Name  <br> <input type="Text" name="Middle_Name">
    
          <br>  Last Name  <br> <input type="Text"  name="Last_Name">

          <!--<br>  User Gender  <br> <input type="Text"  name="UserGender">-->
        
            <br>  Age  <br> <input type="Text"  name="UserAge">
       
            <br>  Phone Number  <br> <input type="Text" name="UserPhone">

           <br> Gender  <label> 
                                <input type="radio" name="UserGender" value="Male" /> Male </label>
                        
                        <label>
                                <input type="radio" name="UserGender" value="Female" /> Female </label>
                        
      </table>
      <br>
      <align="center" colspan="2"><input type="submit" value="Submit">
    </form>
    
  </div>
</div>

</body>
</html>

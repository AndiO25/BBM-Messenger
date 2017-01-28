<? session_start();

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


   <form align="center"  name="_ChangePassword" onSubmit="return validateForm();" action="Changepasswordbbm2.php" method="POST">
      <table>
        <div class="OldPassword">
          <br> Old Password <br> <input type="Text"  name="Password"></div>
        <div class="Newpassword">
          <br>  New Password  <br> <input type="Text"  name="NewPassword"></div>
       <div class="ConfirmPass">
          <br> Confirm Password  <br> <input type="Text"  name="ConfirmPassword"></div>
       <br>
         <align="center" colspan="2"><input type="submit" value="Submit">
            </table>
        </form>
    
  </div>
</div>
<script>
    
  function validateForm() 
    {
        var x = document.forms["_ChangePassword"]["Password"].value;
        if (x == "") 
        {
            alert("Old Password must be filled out");
            return false;
        } 
        //end if function
        
    } //end functiom
</script>
</body>
</html>

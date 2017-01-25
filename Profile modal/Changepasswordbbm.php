<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>

#Submit_Changepassword{
  padding-left: 50%;
}
</style>
<body>

<div class="container">
 
  <!-- Modal -->
  <div class="modal fade" id="_ChangePassword" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
       <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Personal Info</h4>
        </div>
        <div id="modal-body">
        <form name="_ChangePassword" onSubmit="" action="Changepasswordbbm2.php" method="POST">
      <table>
          <div class ="Email">
             <br> E-mail  <br> <input type="Text"  name="EmailAddress"></div>
        <!-- <div class="OldPassword">
       Old Password <input type="Text"  name="Password"></div>-->
        <div class="Newpassword">
       <br>  New Password  <br> <input type="Text"  name="NewPassword"></div>
       <div class="ConfirmPass">
       <br> Confirm Password  <br> <input type="Text"  name="ConfirmPassword"></div>
                <align="center" colspan="2"><input type="submit" value="Submit">
            </table>
        </form>
  </div>
   
       
      </div>
      
    </div>
  </div>
  
</div>
</div>

</body>
</html>

<script>
$(document).ready(function () {

    $('#_ChangePassword').modal('show');

});

</script>


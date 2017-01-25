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
#Submit_PersonalInfo{
  padding-left: 50%;
}
 
</style>
<body>



<div class="container">
 
 
 

  <!-- Modal -->
  <div class="modal fade" id="_Personalinfo" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Personal Information</h4>
        </div>
  <div id="modal-body">
    <form name="Personal" onSubmit="" action="editinfo.php" method="POST">
      <table>
         
          <br>  First Name  <br> <input type="Text"  name="First_Name">
        
          <br> Middle Name  <br> <input type="Text" name="Middle_Name">
    
          <br>  Last Name  <br> <input type="Text"  name="Last_Name">
        
            <br>  User Age  <br> <input type="Text"  name="UserAge">
       
            <br>  Phone Number  <br> <input type="Text" name="UserPhone">
        
            <br>  E-mail  <br> <input type="Text"  name="EmailAddress">

            <br>  User Gender  <br> <input type="Text"  name="UserGender">
 
         
      </table>
      <align="center" colspan="2"><input type="submit" value="Submit">
    </form>
  </div>
</div>
</div>
  
</div>
</div>

</body>
</html>

<script>
$(document).ready(function () {

    $('#_Personalinfo').modal('show');

});

</script>

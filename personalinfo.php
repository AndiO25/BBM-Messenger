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
         <div class="Firstname">
            First Name <input type="Text"  name="First_Name"></div> 
         <div class="Middlename">
            Middle Name <input type="Text" name="Middle_Name"></div>
         <div class="Lastname">
            Last Name <input type="Text"  name="Last_Name"></div>
         <div class="UserGender">
            User Gender <input type="Text"  name="UserGender"></div>
         <div class ="UserAge">
          User Age <input type="Text"  name="UserAge"></div>
         <div class ="Email">
            E-mail <input type="Text"  name="EmailAddress"></div>

         <align="center" colspan="2"><input type="submit" value="Submit">
      </table>
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

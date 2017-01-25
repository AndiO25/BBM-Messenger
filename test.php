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
  .Avatar{
    padding-left: 200px;
  }
  .textavatar{
    padding-left: 200px;
  }
  .form-control{
    padding-left: 200px;

  }
  .SignOut{
    margin-left: 470px;
  }
 #PersonalInfo{
  height:30px;
  } 
 #Status{
  height:30px;
 } 
 #ChangePassword{
  height:30px;
 } 
 
</style>





<style>
  








</style>
<body>

<div class="container">
 
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Settings</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Profile</h4>
        </div>
        <div class="modal-body">
       

<link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
<div class="container clearfix">
   <div class="avatar">
     <input id="fileUpload" type="file" />
 



 <form id="profilepic_form">
<fieldset id="profilepic_controls">

 <div style="width: 120px; height: 100px; position: relative; background-color: #fbfbfb;   border: 1px solid #b8b8b8; "data-controltype="image">
  <img src="https://codiqa.com/static/images/v2/image.png" alt="image" style="position:     absolute; top: 50%; left: 50%; margin-left: -16px; margin-top: -18px">

   <div style= "top:50px;"data-role="fieldcontain" data-controltype="camerainput">
    <input type="file" name="" id="camerainput1" accept="image/*" capture>
   </div>

 </div>
</fieldset>
</form>

<div id="PersonalInfo">
  
          <form name="PersonalInfo" onSubmit="" action="personalinfo.php" method="post">
            <tr>
              <table>
                <td colspan="2"><input type="submit" value="Personal Info"></td>
                 </tr>
                </table>
              </td>
            </tr>
          </table>
        </form>

      </div>
      <div id="Status">
     
          <form name="Status" onSubmit="" action="Status.php" method="post">
            <tr>
              <table>
                <td colspan="2"><input type="submit" value="Status"></td>
                 </tr>
                </table>
              </td>
            </tr>
          </table>
        </form>
  
      </div>
      <div id="ChangePassword">
    
          <form name="Changepassword" onSubmit="" action="Changepasswordbbm.php" method="post">
            <tr>
              <table>
                <td colspan="2"><input type="submit" value="Change Password"></td>
                 </tr>
                </table>
              </td>
            </tr>
          </table>
        </form>

      </div>
        <!--<div class="modal-footer">-->
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
          <button type="button" class="SignOut">Sign Out</button>
       <!-- </div>-->
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>


</script>






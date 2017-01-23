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
          <img src="//placehold.it/100" class="Avatar"  alt="avatar">
          <div class="textavatar"<h6>Add/Edit Avatar</h6></div>
          <input type="file" class="form-control">
     
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







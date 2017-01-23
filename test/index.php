<? session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Black Belt Messaging</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
    padding-top: 70px;
	margin:0px;
  }
  .span4 {
    background: #595959;
    padding: 0px;
	min-width:100%;
  min-height:100%
  }
  .span8 {
    background: white;
    padding: 0px;
	min-width:100%;
  min-height:100%
  </style>
</head>
<body>
 <? include "navbarBBM.php";?>


		<div class="container-fluid">
		  <div class="row-fluid">
			<div class="span4">
			<img src='sidebar.png'>
			  <!--Sidebar content-->
			  <? //include "side-bar.php"; ?>
			</div>
			<div class="span8">
			 
			 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			  <!--Body content-->
			  <img src='Capture.PNG'>
			  <? //include "messagewindow.php"; ?>
			</div>
		  </div> <!--<div class="row-fluid">-->
		</div><!--<div class="container-fluid">-->

<!-- ----------------------------------------------------------------------------------------------- -->
<!-- Modal -->
  <div class="modal fade" id="myModalsettings" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal Settings-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-log-in"></span> Log In</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="validateteachers.php" onSubmit="return validateForm();" method="post" name="username">
            <div class="form-group">
              <label for="username"><span class="glyphicon glyphicon-user"></span> </label>
              <input type="text" class="input" name="user" placeholder="Luke@imyourfather.com">
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-lock"></span> </label>
              <input type="password" class="input" name="pass" placeholder="Your Password">
            </div>
              <button type="submit" class="btn btn-block">Log In 
              </button>
              <a href="NewTeacherRegistration.php" class="btn btn-block">Not User? Sign Up here</a>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p><a href="usernamepasswordrecovery.php">Forgot Your Username/Password? </a></p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

<script>

var x = document.lastModified;
document.forms["yourclasses"]["Timestamp"].value=x;



</script>
</body>
</html>

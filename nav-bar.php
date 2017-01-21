<style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
      background-image: url('http://writingwenches.com/wp-content/uploads/2015/01/bigstock-Female-Hands-Typing-On-A-Lapto-68125156.jpg');
      background-position: center center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #595959;  /* Dark Grey */        
      color: #fff;
  }

  h1 {
    color: #d19b3d;
    font-size: 40px;
    font-weight: bold;
  }

  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 5px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
      background-color: #595959;
  }
  .navbar-nav  li a:hover {
      color: #fff !important;
  }

  footer {
    position: fixed;
    height: 100px;
    bottom: 0;
    width: 100%;
  }
  </style>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
   <a class="navbar-brand" href="#">  
   <img src="http://www.blackbeltcoding.com/wp-content/themes/blackbelt/images/blackbelt-logo-white.svg" alt="BlackBelt Coding" style="width:150px;border:0;">
     </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a data-toggle="modal" data-target="#singUpModal" href="#singUpModal"><span class="glyphicon glyphicon-log-in"></span>Log in</a></li>
        <li><a data-toggle="modal" data-target="#logInModal" href="#logInModal"><span class="glyphicon glyphicon-user"></span> Register</li>
      </ul>
    </div>  
  </div>
</nav>

  <!--SignUp Modal-->
<div class="modal fade" id="singUpModal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Sign Up</h4>
        </div>
        <!-- The form inside body of modal -->
        <div class="modal-body">
          <div class="form-group">
    		<label for="email">Email address</label>
    		<input class="form-control" id="email" placeholder="Enter email" type="email">
  		  </div>
		  <div class="form-group">
		  	<label for="exampleInputPassword1">Password</label>
			<input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
		  </div>
          <p class="text-right"><a href="#">Forgot password?</a></p>
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
          <a href="#" class="btn btn-primary">Sign-up</a>
        </div>
      </div>
    </div>
</div>

<!--LogIn Modal-->
<div class="modal fade" id="logInModal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Log-in</h4>
        </div>
        <div class="modal-body">
                <!-- The form inside body of modal -->
                <form id="loginForm" method="POST" class="form-horizontal" onsubmit="return validateUser()" action="validate.php">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Username</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="user" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-5">
                            <input type="password" class="form-control" name="password" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                    </div>
                        <p class="text-left"><a href="#">Forgot password?</a></p>
                        <br>
                    </div>
                </form>
        </div>
      </div>
    </div>
</div>

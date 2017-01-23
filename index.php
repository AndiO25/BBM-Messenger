<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      /*color: #f5f6f7;*/
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

  footer {
    position: fixed;
    height: 100px;
    bottom: 0;
    width: 100%;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<!--nav bar-->
    <div> <?php include 'nav-bar.php';?> </div>  

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h1>Welcome to Blackbelt Messenger</h1>
</div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Created by Black Belt Coding 2017 <a href="#"></a></p> 
</footer>

</body>
</html>

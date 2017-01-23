<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  .col-sm-2 {
    background: #595959;
    padding: 0px;
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

<div class="container-fluid">
<nav class="navbar navbar-default navbar-fixed-top">
 <? include "navbarBBM.php";?>
</nav>
  <div class="row">
    <div class="col-sm-2" style="background-color:#595959;">
	<? include "side-bar.php"; ?>
    </div> <!--<div class="col-sm-3" style="background-color:#595959;">-->
    <div class="col-sm-10" style="background-color:pink;">
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
		<? include "sampleMessages.php"; ?>
	  </div>
  </div>
</div>

</body>
</html>

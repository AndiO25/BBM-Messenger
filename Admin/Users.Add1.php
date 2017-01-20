<!DOCTYPE html>
<html lang="en">
<head>
  <title>BBM Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add a New User</h2>
  <p></p>    
  <form action='Users.Add2.php' method='post'>        
    <? 
    	$IsNewRecord="yes";
    	include "Users.Form.php"; 
    ?>
  </form>
</div>

</body>
</html>

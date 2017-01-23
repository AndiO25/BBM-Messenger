<? session_start();
/***************************************************************
  * Purpose: CRUD Code Snippets
  * Created By: Allan Miller
  * Created On: 13-Dec-2016
  * Revised By: Allan Miller
  * Revised On: 13-Dec-2016 
****************************************************************/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Courses Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <center>
    <div class="container">
    <h2>Course Management</h2>
    <p>Add a Course </p> 

        <form action='Courses.Add2.php' method='post'>        
          <? 
          	$IsNewRecord="yes";
          	include "Courses.Form.php"; 
          ?>
        </form>         
    </center>
    </div>

</body>
</html>

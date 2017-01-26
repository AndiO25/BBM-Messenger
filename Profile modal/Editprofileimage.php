<? session_start();
/***************************************************************
  * Purpose: Main Window for Messages to be displayed
  * Created By: The BBC team
  * Created On: 18-Dec-2017
****************************************************************/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Black Belt Messager App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<div class="container-fluid">
  <div class="row-fluid">


  
          
          <form   action="uploaduserimage.php" method="POST" enctype="multipart/form-data">
          <table>
            
                        <input type="file" name="fileToUpload" id="fileToUpload"> 

                          <input type="submit" value="Upload Image" name="submit" >
                       
          </table>
          </form>

    
  </div>
</div>

</body>
</html>

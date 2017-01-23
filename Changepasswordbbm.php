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

#Submit_Changepassword{
  padding-left: 50%;
}
</style>
<body>

<div class="container">
 
 
 

  <!-- Modal -->
  <div class="modal fade" id="_ChangePassword" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
       <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Personal Info</h4>
        </div>
        <div id="modal-body">
        <div class="Newpassword">
       New Password <input type="Text"  name="New"></div>
       <div class="Oldpassword">
      Confirm Password <input type="Text"  name="Old"></div>
  

       

        
        <!--<div class="modal-footer">-->
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
          <div id="Submit_Changepassword">
     
          <form name="Status" onSubmit="" action="" method="post">
            <tr>
              <table>
                <td colspan="2"><input type="submit" value="Submit"></td>
                 </tr>
                </table>
              </td>
            </tr>
          </table>
        </form>
  </div>
   
       
      </div>
      
    </div>
  </div>
  
</div>
</div>

</body>
</html>

<script>
$(document).ready(function () {

    $('#_ChangePassword').modal('show');

});

</script>


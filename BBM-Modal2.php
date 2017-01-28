<? session_start();?>

 <link rel="stylesheet" href="modal.css">

<!-- Trigger/Open The Modal -->
<button id="myBtn" class="fa fa-user fa-lg user">  Profile</button>

<!-- The Modal -->
<div id="myModal" class="j-modal">

  <!-- Modal content -->
  <div class="j-modal-content">
    <div class="j-modal-header">
      <span class="j-close">&times;</span>
      <h2>User Profile</h2>
    </div>
    <div class="j-modal-body">
        <table>
        <tr>
            <td><img src="UserImages/<? echo $_SESSION['UserImage']; ?>" alt="<? echo $_SESSION['UserImage']; ?>" width='64px'></td>
          <td>
                <ul>
                    <li> <a href="Editprofileimage.php">Change Profile Picture</a></li>
                    <li> <a href="personalinfo.php">Edit Personal Information </a></li>
                    <li> <a href="Changepasswordbbm.php">Change Password</a></li>
                    <li>  <a href="Logout.php">Log Out </a> </li>
                </ul>
          </td>
        </tr>
        </table>
    </div>

    <div class="j-modal-footer">

      <img src="http://www.blackbeltcoding.com/wp-content/themes/blackbelt/images/blackbelt-logo-white.svg" alt="BlackBelt Coding" style="width:150px;border:0;"> Messenger
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("j-close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
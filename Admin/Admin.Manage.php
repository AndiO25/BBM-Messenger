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
  <h2>Administation</h2>
  <p></p>            
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Functionality</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a href='Messages.Index.php'>Return to site</a></td>
      </tr>
      
    </tbody>
  </table>
</div>

<div class="container">
  <h2>User Management</h2>
  <p></p>            
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Users</th>
      </tr>
    </thead>
    <tbody>
      <tr> 
        <td><a href='Users.CreateTable.php'>Create a Users Table</a></td>
      </tr>
      <tr> 
        <td><a href='Users.Add1.php'>Create a Users</a></td>
      </tr>
      
      <tr>
        <td><a href='Users.DropTable.php'>Drop the Users Table and Start Over</a></td>
      </tr>
       
       <tr>
        <td><a href='Users.ShowEverthingInTable.php'>Show Everything in the Users Table</a></td>
      </tr>
      <tr>
        <td><a href='Users.Import.php'>Import from Users.ImportList.txt</a></td>
      </tr>
    </tbody>
 </table>

</div>

<div class="container">
  <h2>Team Management</h2>
  <p></p>            
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Teams</th>
      </tr>
    </thead>
    <tbody>
      <tr> 
        <td><a href='Teams.CreateTable.php'>Create a Teams Table</a></td>
      </tr>
      
      <tr>
        <td><a href='Teams.DropTable.php'>Drop the Teams Table and Start Over</a></td>
      </tr>
      <tr> 
        <td><a href='TeamsMembers.CreateTable.php'>Create a TeamsMembers Table</a></td>
      </tr>
      
      <tr>
        <td><a href='TeamsMembers.DropTable.php'>Drop the TeamsMembers Table and Start Over</a></td>
      </tr>
      
      <tr>
        <td><a href='Teams.Import.php'>Import from Users.ImportList.txt</a></td>
      </tr>
    </tbody>
 </table>

</div>


<div class="container">
<h2>Messages Management</h2>
  <p></p>            
  <table class="table table-bordered table-hover">
	<thead>
      <tr>
        <th>Messages</th>
      </tr>
    </thead>
    <tbody>
      <tr> 
        <td><a href='Messages.CreateTable.php'>Create a Messages Table</a></td>
      </tr>
      
      <tr>
        <td><a href='Messages.DropTable.php'>Drop the Messages Table and Start Over</a></td>
      </tr>
      
      <tr>
        <td><a href='Messages.Import.php'>Import from Messages.ImportList.txt</a></td>
      </tr>
      <tr>
        <td><a href='Messages.ShowEverthingInTable.php'>Show Everything in the Messages Table</a></td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>

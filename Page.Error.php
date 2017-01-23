<? session_start();
/***************************************************************
	* Purpose: Error Page
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 13-Dec-2016	
****************************************************************/
?>
<!DOCTYPE html>
<html lang="en">
<body>
  <center>	<h1><img src='http://static.thetoptens.com/img/lists/1945.jpg'></h1>
			<h1 style='color:red;'>Error :<? echo "Error=".$_GET['Error']; ?></h1>
 </center>
</body>
</html>


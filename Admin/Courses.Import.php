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
<body>
  <center>
	  <h1>Read the contents of CSV File</h1>
			<!-- *************************************************************************************-->
			<?
			$row = 1;
				if (($handle = fopen("Courses.ImportList.txt", "r")) !== FALSE) {
				    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				        $num = count($data);
				        echo "<p> $num fields in line $row: <br /></p>\n";
				        $row++;
				        //for ($c=0; $c < $num; $c++) {
				            //echo $data[$c] . "<br />\n";
				            $ColumnValue1=htmlspecialchars($data[0]);
							$ColumnValue2=htmlspecialchars($data[1]);
							$ColumnValue3=htmlspecialchars($data[2]);
							$ColumnValue4=htmlspecialchars($data[3]);
							$ColumnValue5=htmlspecialchars($data[4]);

						$sql="INSERT INTO Courses (CourseName,TeacherID,CourseDescription,CourseImageName,	CourseCatelogueNumber) 
						VALUES ('$ColumnValue1', '$ColumnValue2','$ColumnValue3', '$ColumnValue4','$ColumnValue5')";

					$NewRowID=AddNewRow($sql);
				      
				      echo "<h3><u>Using this SQL statement to insert from a CSV file:</u><br>" . $sql . "</h3>";	

				    }
				    fclose($handle);
				}





	//===== This is how you get data from a HTML form =====
								//$tablename=htmlspecialchars($_POST['tablename']);
								//$ColumnName1=htmlspecialchars($_POST['ColumnName1']);
								//$ColumnValue1=htmlspecialchars($_POST['ColumnValue1']);
								//$ColumnName2=htmlspecialchars($_POST['ColumnName2']);
								//$ColumnValue2=htmlspecialchars($_POST['ColumnValue2']);
	
		/*		$Today = date('Y-m-d H:i:s');
				$tablename="Songs"; 
				$ColumnName1="Songname";
				$ColumnValue1="Am I Wrong";
				$ColumnName2="Artist";
				$ColumnValue2="Kids Bop Kids";
				$ColumnName3="SongFileName";
				$ColumnValue3="Am I Wrong.mp3";
				$ColumnName4="SongImageName";
				$ColumnValue4="am I Wrong.jpg";
				$ColumnName5="YoutubeUniqueNumber";
				$ColumnValue5="H-eaW4wakv0";




				$NewRowID=AddNewRow($tablename, $ColumnName1, $ColumnValue1,
					$ColumnName2, $ColumnValue2,
					$ColumnName3, $ColumnValue3,
					$ColumnName4, $ColumnValue4,
					$ColumnName5, $ColumnValue5);


			
			echo "<h3>The Function returned:" . $NewRowID . "</h3>";	
*/

	?>
	</center>
</body>
</html>

<?
/////////////////////////////////////////////////////////////////////////////////////////////////////////
function AddNewRow($sql)
{
	/***************************************************************
	* Prupose: Adds a new row to an existing table
	* Created By: Allan Miller
	* Created On: 13-Dec-2016
	* Revised By: Allan Miller
	* Revised On: 9-Jan-2017	
	* FIXED:  Insert Command not working
****************************************************************/
		
		//$sql="INSERT INTO SongsTable (Songname) VALUES ('Am I Wrong')";	

		//$sql="INSERT INTO `SongsTable` (`SongID`, `Songname`, `Artist`, `SongFileName`, `SongImageName`, `YoutubeUniqueNumber`, `Added_On`) VALUES
//(2, 'Am I Wrong', NULL, NULL, NULL, NULL, '2017-01-09 14:06:31');";

		//$sql="INSERT INTO $tablename ($ColumnName1, $ColumnName2,$ColumnName3, $ColumnName4,$ColumnName5) 
		//VALUES ('$ColumnValue1', '$ColumnValue2','$ColumnValue3', '$ColumnValue4','$ColumnValue5')";	

		//echo "<h3>SQL Statement:" . $sql . "</h3>";		
		include "Student6.ConnectString.php";
			$connect = mysqli_connect($host_name, $user_name, $password, $database);
				$result=mysqli_query($connect,$sql) or die(mysqli_error()); ;
				$row_cnt = mysqli_num_rows($result);
				mysqli_close($connect);
				if($result)
				{
					echo "<h2 style='color:black; font-size:22px; font-family:Calibri; font-weight:bold;'>Data successfully Inserted\n</h2>";
				}
				else
				{
				  die('Could not insert data: ' . mysql_error());
				}

	return $sql;
} // end function
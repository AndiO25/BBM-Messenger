<style>
/* Remove rounded borders from list */
.list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
}

.list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

/* Remove border and add padding to thumbnails */
.thumbnail {
    margin: 15px;
    padding: 15px;
    border: none;
    border-radius: 0;
    max-height: 300px;
    min-height: 300px;
    min-width: 300px;
    max-width: 300px;
}

.thumbnail p {
    margin-top: 15px;
    color: #555;
}

/* Black buttons with extra padding and without rounded borders */
.btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
}

/* On hover, the color of .btn will transition to white with black text */
.btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
}
</style>
<div class="container-fluid">   
<div class="row text-center">

<?            


/*************************************************************************
        *  This is your second query for the actual rows of the database         *
        **************************************************************************/
        $query="SELECT * FROM Courses";
        //echo $query;
        include "Student6.ConnectString.php";
        $connect = mysqli_connect($host_name, $user_name, $password, $database);
        $result=mysqli_query($connect,$query) or die(mysqli_error()); ;
        $row_count = mysqli_num_rows($result);
        mysqli_close($connect);
        //printf("Result set has %d rows.\n", $row_cnt);
        //echo "num=$row_cnt<br>";
        while($ResultsArray = mysqli_fetch_array($result)) 
        {
           $CourseID=$ResultsArray[0];
           $CourseName=$ResultsArray[1];
           $TeacherID=$ResultsArray[2];
           $CourseDescription=$ResultsArray[3];
           $CourseImage=$ResultsArray[4];
           $CourseCatelogueNumber=$ResultsArray[5];

                          $connect2 = mysqli_connect($host_name, $user_name, $password, $database);
                          $query2="SELECT * FROM Teachers Where TeacherID=$TeacherID"; 
                          $result2=mysqli_query($connect2,$query2) or die(mysqli_error()); ;
                          $row_cnt2 = mysqli_num_rows($result2);
                          mysqli_close($connect2);
                            while($ResultsArray2 = mysqli_fetch_array($result2)) 
                            {
                              $TeacherFirstName=$ResultsArray2['TeacherFirstName'];
                              $TeacherLastName=$ResultsArray2['TeacherLastName'];
                              $TeacherImage=$ResultsArray2['TeacherImage'];
                              
                            } // end while


                            echo '<div class="col-sm-4">';
                                //echo '<div class="card-deck>';
                                  echo '<div">';

                                    echo "<img class='card-img-top' img-fluid' src='./Course.Images/$CourseImage' alt='$CourseName'>";
                                        echo "<div class='card-block'>";
                                            echo "<h4 class='card-title'>$CourseName</h4>";
                                            echo "<p class='card-text'>$CourseDescription</p>";
                                            echo "<p class='card-text'><small class='text-muted'>$CourseCatelogueNumber</small></p>";
                                        echo "</div>"; //<div class='card-block'>

                                       //echo "<div class='card-block'>";
                                        //  echo "<div class='thumbnail'><img src='/Teachers.Images/$TeacherImage' alt='' style='height:70px;min-height:700px;max-height:70px;'><br>";
                                       //   echo "<p class='card-text'><small class='text-muted'>Instructor: $TeacherLastName, $TeacherFirstName'</small></p>";
                                     //   echo "</div>"; //<div class='card-block'>

                                 

                                  echo '</div>';  //<div class="card">">

                              //echo '</div>';  //<div class="card-deck">
                            echo '</div>';  //<div div class="col-sm-4">

            } // while($ResultsArray = mysqli_fetch_array($result)) 


?>
 
</div> 
</div>
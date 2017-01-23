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
</style>>
<div class="container" style='padding-top: 100px; width:100%;'>   

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
            echo '<div class="row text-center">';
              echo '<div class="col-sm-4">';
                echo '<div class="thumbnail">';
                  echo "<img src='./Course.Images/$CourseImage' alt='$CourseName'>";
                  echo "<p><strong>$CourseName   ($CourseCatelogueNumber)</strong></p>";
                  echo "<p>$CourseDescription</p>";
                  echo '<button class="btn">See the Syllabus</button>';
                echo '</div>';
              echo '</div>';
        } // while($ResultsArray = mysqli_fetch_array($result)) 


?>
                    

       
</div>
<?php            
/*************************************************************************
        *  This is your second query for the actual rows of the database         *
        **************************************************************************/
        $query="SELECT * FROM Users";
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
           $UsersID=$ResultsArray[0];
           $EmailAddress=$ResultsArray[1];
                            echo '<li> '.$EmailAddress.'</li>';
                        // <!-- /.caption -->
        } 
?>      
</div>


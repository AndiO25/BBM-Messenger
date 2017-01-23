<? session_start();
/***************************************************************
  * Purpose: Display all the courses as cards
  * Created By: Allan Miller
  * Created On: 13-Dec-2016
  * Revised By: Allan Miller
  * Revised On: 13-Dec-2016 
****************************************************************/
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Tintagel Academy of Techno-Wizardry</title>
    
    <!-- FAVICON -->
  <link rel="icon" type="image/png" href="/images/favicon.png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="css/TintagelAcademy.css" rel="stylesheet" type="text/css">

  <!-- PRE JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>      
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link href='http://fonts.googleapis.com/css?family=Roboto|Pacifico|Josefin+Sans' rel='stylesheet' type='text/css'> 
    
 
  <!-- THEME CSS -->
  <link href="http://static.hogwartsishere.com/storage/css/theme.css" rel="stylesheet">
  <link href="http://static.hogwartsishere.com/storage/css/custom.css" rel="stylesheet">
    <style type="text/css">
    .dash-card-p { padding:15px; font-size:17px !important; color:black; }
    .josefin { font-family:'Josefin Sans', 'Roboto', sans-serif !important; }
    .roboto { font-family:'Roboto', sans-serif !important; }
    .strong { font-weight:bold; }
    
  </style>
  
</head>

	
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
	<!-- ============================ Header and Navbar ===========================================-->
    <? include "../INCLUDE.Navbar.php"; ?>
<!-- ==================== Container (Banner) ================================================-->
    <div class="container" style='padding-top: 100px; width:100%;'>   

    <section class="Jumbotron" style="background-image: url(http://static.hogwartsishere.com/media/course_covers/history.jpg); background-size:cover;">
          <div class="hero-bg" style="background:rgba(0,0,0,0.5);"></div>
          <div class="container">
            <div class="page-header">
              <div class="page-title bold"><a class="josefin" href="/courses/">Online Courses</a></div>
              <p class="josefin" style="max-width:500px; margin:0 auto; margin-top:15px; margin-bottom:15px; font-size:18px;">We've opened up our entire course directory. You can now explore all lesson material at your own pace - and if interested, take real assignments graded by our professors!</p>
            </div>
          </div>
        </section>
    </div>    <!-- Container (Banner) -->


 <!-- ======================== Container (Course Cards)==================================================== -->
<div class="container" style='width:100%;'>   
    <? include "Courses.INCLUDE.CoursesCards.php"; ?>
</div>    <!-- ======================== Container (Course Cards)==================================================== -->

<!-- Footer -->
<? include "INCLUDE.Footer.php"; ?>

</body>
</html>


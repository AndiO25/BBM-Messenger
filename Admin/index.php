<? session_start();
//=================== Check to see if User is log in ====================================================
// Check, if username session is NOT set then this page will jump to login page
//if (!isset($_SESSION['UserID'])) 
//{  header('Location: ../index.php'); }
//else
//{ header('Location: Courses.Index.php'); }
//========================================================================================================
header('Location: Admin.Manage.php');
?>


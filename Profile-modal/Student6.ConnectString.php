<?
	$host_name  = "db658529386.db.1and1.com";
    $database   = "db658529386";
    $user_name  = "dbo658529386";
    $password   = "BlackBeltCoding";

    $connect = mysqli_connect($host_name, $user_name, $password, $database);
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
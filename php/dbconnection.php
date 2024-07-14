<?php
//Create a database connection
$dbhost     = "localhost";
$dbuser     = "root";
$dbpassword = "";
$dbname     = "uas";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    
//Test if connection occoured
if(mysqli_connect_errno()){
    die("DB connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
    );
}
?>

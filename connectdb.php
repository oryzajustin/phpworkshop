<?php
$dbhost = "localhost";
$dbuser= "ta";
$dbpass = "cs3319";
$dbname = "vetoffice";
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
     die("database connection failed :" .
     mysqli_connect_error() .
     "(" . mysqli_connect_errno() . ")"
         );
    }
?>

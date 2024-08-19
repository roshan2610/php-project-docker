<?php
   $server="localhost";
   $username="root";
   $password="";
   $dbname="roshanp";
    $con = mysqli_connect("$server","$username","$password","$dbname");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
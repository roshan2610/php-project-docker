<?php
$server = "localhost";
$username = "root" ;
$password = "" ;
$dbname = "roshanp" ;

$con = mysqli_connect($server , $username , $password , $dbname );
if(!$con)
{
    die("Error deleting record:" .mysqli_error($connection));

}
else{
}
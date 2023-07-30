<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="health_progress";
//creaing database connection //
$connection =mysqli_connect($servername ,$username , $password ,$database);
if(!$connection){
    die("failed to connect.".mysqli_connect_error());
}
?>
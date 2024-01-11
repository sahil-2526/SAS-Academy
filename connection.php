<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sas_academy";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "connection ok";
}
else {
    echo "failed";
}
?>
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dreambody";

$conn = new mysqli($host , $username , $password , $dbname);

if($conn->connect_error)
{
    die("Fail to connect !!" . $conn->connect_error);
}

?>
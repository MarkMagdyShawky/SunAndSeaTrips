<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "traveling";

$con = mysqli_connect($host, $user, $pass, $db) or die("Error Connection Failed");

$con->set_charset("utf8");

?>
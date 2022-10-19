<?php

$server= "localhost";

$username= "root";

$password = "";

$db = "xenon";

$conn = mysqli_connect($server, $username, $password, $db);

if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
?> 
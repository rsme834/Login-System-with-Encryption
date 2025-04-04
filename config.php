<?php

$host = "localhost";  
$username = "root";   
$password = "root";       
$dbname = "login";    

$con = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {

    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful!";  
}
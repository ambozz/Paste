<?php

define('DB_USERNAME','username');
define('DB_PASSWORD','password');
define('DB_SERVER','localhost');
define('DB_NAME','database');

// Attempt to connect to MySQL database
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
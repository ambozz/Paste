<?php

define('DB_USERNAME','username');
define('DB_PASSWORD','password');
define('DB_SERVER','localhost');
define('DB_NAME','database');

// Language Config

// paste.php
define(PASTE_P_NOT_DEFINED,'database');

// create.php
define(CREATE_CONTENT_NOT_DEFINED,'database');
define(CREATE_INSERT_FAILED,'database');

// install.php
define(INSTALL_PASTES_TABLE_CREATED,'database');
define(INSTALL_PRIMARY_KEY_ID_ADDED,'database');

// Attempt to connect to MySQL database
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
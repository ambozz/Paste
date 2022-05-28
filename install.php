<?php
// Import config.php
require_once("config.php");

// Set content-type to raw text
header("Content-Type: text/plain");

// Create pastes table
if($result = $mysqli -> query("CREATE TABLE `pastes` (`id` varchar(16) NOT NULL,`content` longtext NOT NULL,`create_time` timestamp NOT NULL DEFAULT current_timestamp());")){
    echo("Table 'pastes' was created successfully.\n");
}
if($result = $mysqli -> query("ALTER TABLE `pastes` ADD PRIMARY KEY (`id`);")){
    echo("Primary Key 'id' added successfully.\n");
}

?>
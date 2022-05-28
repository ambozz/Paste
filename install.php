<?php
// Import config.php
require_once("config.php");

// Create pastes table
if($result = $mysqli -> query("CREATE TABLE `pastes` (`id` varchar(16) NOT NULL,`content` longtext NOT NULL,`create_time` timestamp NOT NULL DEFAULT current_timestamp());")){
    echo("Table 'pastes' was created successfully.");
}

?>
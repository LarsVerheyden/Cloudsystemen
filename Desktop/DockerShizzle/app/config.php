<?php
// Basic connection settings
$databaseHost = 'db';
$databaseUsername = 'LarsVerheyden';
$databasePassword = 'cloudsystemen';
$databaseName = 'rolodex';

// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>

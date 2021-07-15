<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost:3308';
$databaseName = 'we';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>
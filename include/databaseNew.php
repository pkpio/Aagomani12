<?php
//Report all error..
error_reporting(E_ALL);

// start the session
session_start();

// database connection config
$dbHost = 'localhost';
$dbUser = 'inzaak_aagomani';
$dbPass = 'aagomani123';
$dbName = 'inzaak_aagomani';

//Connect to database...
$dbConn = mysql_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysql_error());
mysql_select_db($dbName) or die('Cannot select database. ' . mysql_error());
?>

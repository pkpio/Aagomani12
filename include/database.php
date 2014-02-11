<?php
//Report all error..
error_reporting(E_ALL);
//error_reporting(0);

// start the session
session_start();

//Connect to database...

if (isset($_SESSION['user_email'])) dbConnect();// Connect only when needed so that it won't make sql connections for who is just browsing the site.

function dbConnect(){

// database connection config
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'aagomani12';

$dbConn = mysql_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysql_error());
mysql_select_db($dbName) or die('Cannot select database. ' . mysql_error());
}
?>
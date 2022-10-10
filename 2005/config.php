<?php
/* Database credentials. */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'hyperion');

/* Set timezone to EST */
date_default_timezone_set('America/New_York');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("<center>ERROR: Could not connect. " . mysqli_connect_error() . "</center>");
} else {
    session_start();
  //  echo("<center>DEBUG: Database connected successfully</center>");
}
$loggedIn = isset($_SESSION['username']);

?>
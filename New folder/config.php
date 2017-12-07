<?php
/* Database credentials */
define('DB_SERVER', '66.147.242.186');
define('DB_USERNAME', 'urcscon3_bangkok');
define('DB_PASSWORD', 'coffee1N');
define('DB_NAME', 'urcscon3_bangkok');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<?php
$dbhost="localhost";
$dbuser=""; //your db username
$dbpass=""; //your db password
$dbname=""; //your db name

$link = mysql_connect($dbhost, $dbuser, $dbpass); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname); 
?>

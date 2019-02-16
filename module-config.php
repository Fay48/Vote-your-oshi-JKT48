<?php
$dbhost="localhost";
$dbuser="uxer";
$dbpass="LZ<Ua27_as.B";
$dbname="vyo";

$link = mysql_connect($dbhost, $dbuser, $dbpass); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname); 
?>
